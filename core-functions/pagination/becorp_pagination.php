<?php 
class becorp_pagination
{
function becorp_page($curpage, $post_data)
{	?>
	
		<div class="blog-pagination wow animated fadeInLeft">
			<?php if($curpage != 1  ) {
					echo '<a href="'.get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)).'"><i class="fa fa-angle-double-left"></i></a>'; } ?>
			<?php for($i=1;$i<=$post_data->max_num_pages;$i++)
				{
				echo '<a class="'.($i == $curpage ? 'active ' : '').'" href="'.get_pagenum_link($i).'">'.$i.'</a>';
				}				
			if($i-1!= $curpage)	 {
			echo '<a class="" href="'.get_pagenum_link(($curpage+1 <= $post_data->max_num_pages ? $curpage+1 : $post_data->max_num_pages)).'"><i class="fa fa-angle-double-right"></i></a>';
			 } ?>
		</div>
	  
<?php } 
}
class becorp_pagination2
{
function becorp_page2($curpage, $post_data,$div)
{	?>
	<div class="blog-pagination wow animated fadeInLeft">
			<?php if($curpage != 1  ) {
				$arr=explode("?",get_pagenum_link(($curpage-1 > 0 ? $curpage-1 : 1)));
					echo '<a href="'.$arr[0]."?div=$div".'"><i class="fa fa-angle-double-right"></i></a>'; } ?>
			<?php for($i=1;$i<=$post_data->max_num_pages;$i++)
				{
					$arr=explode("?",get_pagenum_link($i));
				echo '<a class="'.($i == $curpage ? 'active ' : '').'" href="'.$arr[0]."?div=$div".'">'.$i.'</a>';
				}				
			if($i-1!= $curpage)	{
			$arr=explode("?",get_pagenum_link(($curpage+1 <= $post_data->max_num_pages ? $curpage+1 : $post_data->max_num_pages)));
			echo '<a href="'.$arr[0]."?div=$div".'"><i class="fa fa-angle-double-left"></i></a>'; } ?>
		</div>
<?php } } ?>