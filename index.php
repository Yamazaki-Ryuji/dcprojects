<?php
$color=SC_get_field('custom_page_couleur');
get_header();
?>
<style>
h1{
	color:<?=$color?>;
}
</style>
<?php
echo
'hello'.
'<h1>'. SC_get_field('custom_page_sous_titre').'</h1>';

?>
<script>
var temp = '<?=$color?>';
</script>

<h1><?php SC_the_field('custom_page_sous_titre');?></h1>

<?php
SC_the_image_field('custom_page_image_1');
echo '<pre>';print_r( $image1 );echo'</pre>';

get_footer();
