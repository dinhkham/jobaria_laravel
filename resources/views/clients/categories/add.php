<h1>Them chuyen muc</h1>
<form action="<?php echo route('categories.add'); ?>" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="text" name="cateogory_name" placeholder="Tên chuyên mục">
  <button type="submit">Thêm chuyên mục</button>
</form>
