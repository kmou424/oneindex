<?php view::layout('layout')?>
<?php $item['thumb'] = onedrive::thumbnail($item['path']);?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">
	<br>
	<div class="nexmoe-item">
		<video class="mdui-video-fluid mdui-center" preload controls poster="<?php @e($item['thumb']);?>">
		  <source src="<?php e($item['downloadUrl']);?>" type="video/mp4">
		</video>
		<br>
		<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-pink-accent" onclick="location.href='<?php e($item['downloadUrl']);?>'" type="button" style="display:block;margin:0 auto">下载</button>
	</div>
	<br>
	<div class="nexmoe-item">
		<div class="mdui-textfield">
		  <label class="mdui-textfield-label">下载地址</label>
		  <input class="mdui-textfield-input" type="text" value="<?php e($url);?>"/>
		</div>
		<div class="mdui-textfield">
		  <label class="mdui-textfield-label">引用地址</label>
		  <textarea class="mdui-textfield-input"><video><source src="<?php e($url);?>" type="video/mp4"></video></textarea>
		</div>
	</div>
</div>
<?php view::end('content');?>