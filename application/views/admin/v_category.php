﻿<br/>
<p align="right">
<a href="/admin/category/add"><img src="/media/img/add.png">Добавить</a> <a href="/admin/category/delete">Удалить</a>
</p>

<table class="border">
	<tr><th> Название категории </th><th> Функцыи </th></tr>

		<?foreach ($categories as $cat):?>
  	<tr><td>     
            <input type="checkbox" name="cat_id" value="<?=$cat->id?>"><?=str_repeat('&nbsp;', 2 * $cat->lvl)?><a href="/admin/category/edit/<?=$cat->id?>"><?=$cat->category_title ?></a></td>
		<td><a href="/admin/category/delete/<?=$cat->id?>">Удалить</a></td>
	</tr>  
		<?endforeach?>

</table>


		  

