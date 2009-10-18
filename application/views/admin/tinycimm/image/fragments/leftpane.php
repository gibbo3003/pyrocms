<div id="add-folder" class="clearfix">
	<div class="heading">&raquo; Add Folder</div>
	<input type="text" id="add-folder-caption" class="input">
	<img id="add-folder-image" src="img/save.gif" class="state-out"
	onclick="TinyCIMMImage.addFolder();" 
	onmouseover="this.className='state-over';" onmouseout="this.className='state-out';" alt="save folder" title="save folder" />
	&nbsp;
	<img id="add-folder-cancel-image" src="img/cancel.png" class="state-out"
	onclick="tinyMCEPopup.dom.get('add-folder').style.display='none';tinyMCEPopup.dom.get('add-folder-caption').value='';" 
	onmouseover="this.className='state-over';" onmouseout="this.className='state-out';" alt="cancel" title="cancel" />
</div>
<div class="heading">
	<span class="add-folder-link">
		[<a href="#" onclick="tinyMCEPopup.dom.get('add-folder').style.display='block';tinyMCEPopup.dom.get('add-folder-caption').focus()">add</a>]
	</span>&raquo; Folders
</div>
<div id="folderlist">
	<?= $this->load->view($this->view_path.'folder_list');?>
</div>
<br/>
<div class="heading">&raquo; Folder Info</div>
<table border="0" cellpadding="2" cellspacing="1">
	<tr><td>Images:</td><td><?=$selected_folder_info['total_assets'];?></td></tr>
	<tr><td>Size:</td><td><?=$selected_folder_info['total_file_size'];?></td></tr>
	<tr><td>View:</td><td>
	<select style="border:1px solid #AAA" onchange="TinyCIMMImage.changeView(this.options[this.selectedIndex].value)">
		<optgroup label="Views">
			<option value="listing"<?=$this->session->userdata('cimm_view')=='listing'?' selected':'';?>>File Listing</option>
			<option value="thumbnails"<?=$this->session->userdata('cimm_view')=='thumbnails'?' selected':'';?>>Thumbnails</option>
		</optgroup>
	</select></td></tr>
</table>
