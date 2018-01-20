<?php
defined('_JEXEC') or die('Restricted access');
//$doc = & JFactory::getDocument();
//$doc->addStyleSheet("//code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css");
//$doc->addScript("//code.jquery.com/jquery-1.10.2.js");
//$doc->addScript("//code.jquery.com/ui/1.10.4/jquery-ui.js");
?>
<style>
#databaseTables ul li {
	padding:10px;
	list-style:none;
}
#databaseTables ul li.success {
	background:	#6F6;
}
#databaseTables ul li.failed {
	background:	#FCF;
}
#progressbar {
	width:	100%;
	height:	40px;	
}
#progressbar .filled {
	background:	#6C3;
	height:		40px;
	width:		0%;	
	transition: 	width linear 1s;
}
</style>
<div id="progressbar"><div class="filled"></div></div>
<ul>
	<li><button class="btn btn-large" id="getDatabaseTables"><span class="icon-options"></span> Get Database tables</button> </li>
	<li><button class="btn btn-large" id="synchronizeDatabase"><span class="icon-options"></span> Synchronize Live Database to Emergency</button> </li>
	<li><button class="btn btn-large" id="getFilesFolders"><span class="icon-options"></span> Get Files & Folders</button> </li>
	<li><button class="btn btn-large" id="copyFilesFolders"><span class="icon-options"></span> Copy Live Files & Folders to Emergency</button> </li>
	<li><button class="btn btn-large" id="copyFilesFolders"><span class="icon-options"></span> Copy Dev Files & Folders to Live</button> </li>
</ul>
<hr/>
<div id="databaseTables">

</div>



<script type='text/javascript'>
(function($){
	$('#getDatabaseTables').click(function() {
		getDatabasetables();
	});
	$('#synchronizeDatabase').click(function() {
		synchronizeDatabase();
	});
	$('#getFilesFolders').click(function() {
		getFilesFolders();
	});
	$('#copyFilesFolders').click(function() {
		copyFilesFolders();
	});
	
	var totalTables = 0;
	var tableCounter = 0;
	function synchStep(element) {
		$.ajax({
		  url: "index.php?option=com_harmonize&task=synchTable&table=" + $(element).text(),
		  context: document.body
		}).done(function(html) {
			if(html == "Success") {
				$(element).addClass("success");
			}
			else {
				$(element).addClass("failed");
			}
			
			if( $(element).next() ) {
				tableCounter++;
				var newValue = Math.round(tableCounter / totalTables * 100);
				//alert(newValue);
				$( "#progressbar .filled" ).eq(0).css("width", newValue + "%");
				synchStep( $(element).next() );
			}

		});
	}
	function synchronizeDatabase() {
		synchStep( $('#databaseTables ul li').eq(0) );
	}
	
	function copyFilesFolders() {
		$.ajax({
		  url: "index.php?option=com_harmonize&task=copyFilesFoldersEmergency",
		  context: document.body
		}).done(function(html) {
			$( '#databaseTables' ).html(html);
		});
	}
	
	function getFilesFolders() {
		$.ajax({
		  url: "index.php?option=com_harmonize&task=getFilesFolders",
		  context: document.body
		}).done(function(html) {
			$( '#databaseTables' ).html(html);
		});
	}
	function getDatabasetables() {
		$.ajax({
		  url: "index.php?option=com_harmonize&task=getLiveTables",
		  context: document.body
		}).done(function(html) {
			$( '#databaseTables' ).html(html);
			totalTables = $('#databaseTables ul li' ).length;
		});
	}
	
})(jQuery);

</script>