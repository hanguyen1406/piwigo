<?php
if (!defined('LINKEDPAGES_PATH')) die('Hacking attempt!');

/**
 * add a tab on album properties page
 */
function linked_pages_tabsheet_before_select($sheets, $id)
{
  if ($id == 'album')
  {
    $sheets['linked_pages'] = array(
      'caption' => l10n('Linked Pages'),
      'url' => LINKEDPAGES_ADMIN.'-album-'.$_GET['cat_id'],
      );
  }
  
  return $sheets;
}

/**
 * display menu a album page/additional page
 */
function linked_pages_loc_end_index()
{
  global $page, $user, $template, $conf;
  
  if (isset($page['section']) and $page['section']=='categories' and isset($page['category']))
  {
    $where_clauses = array('category_id = '.$page['category']['id']);
    
    if (!is_admin())
    {
      if ($conf['AP']['language_perm'])
      {
        $where_clauses[] = '(ap.lang = NULL OR ap.lang = "'.$user['language'].'")';
      }
      if ($conf['AP']['level_perm'])
      {
        $where_clauses[] = 'ap.level <= '.$user['level'];
      }
      if ($conf['AP']['user_perm'])
      {
        $where_clauses[] = 'ap.users LIKE "%'.$user['status'].'%"';
      }
      if ($conf['AP']['group_perm'])
      {
        $query = '
SELECT group_id
  FROM '.USER_GROUP_TABLE.'
  WHERE user_id = '.$user['id'].'
;';
        $user_groups = query2array($query, null, 'group_id');
      }
    }
    
    $query = '
SELECT
    lp.*,
    ap.lang,
    ap.title,
    ap.standalone,
    ap.permalink,
    ap.groups
  FROM '.LINKEDPAGES_TABLE.' AS lp
    INNER JOIN '.ADD_PAGES_TABLE.' AS ap
    ON lp.page_id = ap.id
  WHERE
    '.implode("\n    AND ", $where_clauses).'
  ORDER BY lp.pos
;';
    $result = pwg_query($query);
    
    if (!pwg_db_num_rows($result))
    {
      return;
    }
    
    while ($row = pwg_db_fetch_assoc($result))
    {
      if (!is_admin() and $conf['AP']['group_perm'] and !empty($row['groups']))
      {
        $authorized = false;
        foreach (explode(',',$row['groups']) as $group_id)
        {
          if (in_array($group_id, $user_groups))
          {
            $authorized = true;
            break;
          }
        }
        if (!$authorized) continue;
      }
      
      $row['U_PAGE'] = make_index_url(array('section'=>'page')).'/'.(isset($row['permalink']) ? $row['permalink'] : $row['page_id']);
      $row['TITLE'] = trigger_change('AP_render_title', $row['title']);
      $template->append('category_pages', $row);
    }
    
    $template->assign('LINKEDPAGES_PATH', LINKEDPAGES_PATH);
    $template->set_filename('linked_pages_content', realpath(LINKEDPAGES_PATH . 'template/index_menu.tpl'));
    $template->assign('PLUGIN_INDEX_CONTENT_BEGIN', $template->parse('linked_pages_content',true).$template->get_template_vars('PLUGIN_INDEX_CONTENT_BEGIN'));
    
  }
  else if (isset($page['section']) and $page['section']=='additional_page' and isset($page['additional_page']))
  {
    $where_clauses = array('page_id = '.$page['additional_page']['id']);
    
    if (!is_admin())
    {
      $where_clauses[] = 'lp.category_id NOT IN('.$user['forbidden_categories'].')';
    }
    
    $query = '
SELECT
    lp.*,
    cat.name,
    cat.permalink
  FROM '.LINKEDPAGES_TABLE.' AS lp
    INNER JOIN '.CATEGORIES_TABLE.' AS cat
    ON lp.category_id = cat.id
  WHERE
    '.implode("\n    AND ", $where_clauses).'
  ORDER BY lp.pos
;';
    $result = pwg_query($query);
    
    if (!pwg_db_num_rows($result))
    {
      return;
    }
    
    while ($row = pwg_db_fetch_assoc($result))
    {
      $row['U_PAGE'] = make_index_url(
        array(
          'category' => array(
            'id' => $row['category_id'], 
            'name' => $row['name'], 
            'permalink' => $row['permalink'],
            )
          )
        );
      $row['TITLE'] = trigger_change('render_category_name', $row['name']);
      $template->append('category_pages', $row);
    }
    
    $template->assign('LINKEDPAGES_PATH', LINKEDPAGES_PATH);
    $template->set_filename('linked_pages_content', realpath(LINKEDPAGES_PATH . 'template/index_menu.tpl'));
    $template->assign('PLUGIN_INDEX_CONTENT_BEGIN', $template->parse('linked_pages_content',true).$template->get_template_vars('PLUGIN_INDEX_CONTENT_BEGIN'));
  }
}
