<div class="titrePage">
  <h2>{'Page title'|@translate}</h2>
</div>
{if isset ($gestionA)}
		  <h3>{'title_pre'|@translate}</h3>
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'title_select'|@translate}</legend>
					{'title_list'|@translate}	
					{if isset ($title_edit)}{html_options name="titlelist" values=$titlepagelist output=$titlepagelistT selected=$title_edit.VALUE}
					{else}{html_options name="titlelist" values=$titlepagelist output=$titlepagelistT}{/if}
				<br>	
				<br>
				<div style="text-align:center;">
					<input class="submit" name="subtitlespecialET" type="submit" value="{'title_choix'|@translate}"/>
				</div>
			</fieldset>
		</form>
	</div>
	{if isset ($title_edit)}
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'title_page'|@translate}</legend>
					<input type="hidden" name="invisible" value="{$title_edit.VALUE}">
					<input type="text" name="inser" value="{$title_edit.CONTENT}" size="100" maxlenght="100">
				<br>	
				<br>
					<div style="text-align:center;">
					<input class="submit" name="subtitlespecial" type="submit" value="{'title_insbase'|@translate}"/>
					</div>
			</fieldset>
		</form>
	</div>
	{/if}
{/if}

{if isset ($gestB)}
	<form method="post" >
	 <fieldset id="mainConf">
			<span class="property">
				<label for="contacttitle">{'Contact Title'|@translate}</label><br><br>
			</span>
			<textarea rows="5" cols="50" class="description" name="contacttitle" id="contacttitle">{$gestB.CTBASE}</textarea>
  <p>
    <input class="submit" type="submit" name="submitct" value="{'Submit'|@translate}">
    <input class="submit" type="reset" name="reset" value="{'Reset'|@translate}">
  </p>
  	</form>
{/if}

{if isset ($gestionC)}
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'Choose Additional Pages'|@translate}</legend>
		{html_options name="APchoix" options=$gestionC.OPTIONS selected=$gestionC.SELECTED}
				<br>	
				<br>
					<div style="text-align:center;">
					<input class="submit" name="submitchoixAP" type="submit" value="{'sumit'|@translate}" />
					</div>
			</fieldset>
		</form>
	</div>
	{if isset ($ap_edit)}
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'Add title for pages'|@translate} {$ap_edit.VALUE}</legend>
					<input type="hidden" name="invisible" value="{$ap_edit.VALUE}">
					id&nbsp;:&nbsp;{$ap_edit.VALUE}&nbsp;->&nbsp;{$ap_edit.VALUEN}<br>
					<textarea rows="5" cols="50" class="description" name="insertitle" id="contacttitle">{$ap_edit.CONTENT}</textarea>
				<br>	
				<br>
					<div style="text-align:center;">
					<input class="submit" name="submitinsapt" type="submit" value="{'sumit'|@translate}"/>
					</div>
			</fieldset>
		</form>
	</div>
	{/if}
{/if}
{if isset ($titlegestalbum)}
<div>
    <form method="post" >
	<fieldset>
	<legend><span class="icon-book icon-green"></span>{'title_album'|@translate}</legend>
    <p>
      <strong>{'title_album'|@translate}</strong>
      <br>
      <textarea rows="4" cols="80" {if $useED==1}placeholder="{'Use Extended Description tags...'|@translate}"{/if} name="insertitleA" id="insertitleA" class="insertitleA">{$titleCONTENT}</textarea>
    </p>
	<p class="formButtons">
		<input type="submit" name="submittitlealbum" value="{'Save Settings'|@translate}">
	</p>	
  	</fieldset>
    </form>
</div>
{/if}