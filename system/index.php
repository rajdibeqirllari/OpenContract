<?
$title = "Agency Users";
$subtitle = "IDC Reporting";

// Probably will not needed.
//$docfunc = "/home/httpd/html/PS/ps-docmanV2-func.php";
//include($docfunc);

$header = "../ps-idc-header.php";
$footer = "../ps-idc-footer.php";
$links = "/home/httpd/html/PS/ps-links.php";

require($header);
?>
<DIV id="contentwrap">
	<DIV id="sidebar">
	<?include ($links)?>
	</DIV>
	<DIV id="ps-content">
		<DIV class="sansbold18" style="margin-bottom: 15px; margin-top: 2px;">&nbsp;<?= $title?></DIV>
		<DIV class="info_block">
		The <SPAN style="font-weight:bold">Office of State Engineer</SPAN> (OSE) is responsible for (some wording to
		be determined by John White, etc.).
		</DIV> <!-- info_block-->
	</DIV> <!-- ps -content -->
</DIV> <!-- contentwrap -->
<?
require($footer);
?>