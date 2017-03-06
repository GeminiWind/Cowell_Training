<div class="content-wrapper" style="min-height: 901px;">
        <div style="padding: 0px; background: white; z-index: 999999; font-size: 16px; font-weight: 600;"></div>
        <section class="content-header">
            <h1>
                Edit Category
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create a new book</h3>
                        </div>
                        <form role="form" action="/?controller=category&action=update&id=<?php echo $category->id?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name"
                                          placeholder="Nhập tên app" value="<?php echo $category->name ?>">
                                </div>
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id">
                                    <option value=''>Choose one</option>
                                    <?php foreach ($categories as $item) {
                                        if ($item->name === $category->parent_id) {
                                            echo "<option value='".$item->id."' selected>".$item->name."</option>";
                                        } else {
                                              echo "<option value='".$item->id."'>".$item->name."</option>";
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="author_id">Name SEO</label>
                                    <textarea id="description" rows=8 name="name_seo" class="form-control"><?php echo $category->name_seo ?></textarea>
                                </div>
                                    <div class="form-group">
                                        <label for="publisher_id">Keyword SEO</label>
                                        <textarea id="description" rows=8 name="keyword_seo" class="form-control"><?php echo $category->keyword_seo ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <textarea id="description" rows=8 name="description" class="form-control"><?php echo $category->description?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Published</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="is_public" id="type_free"
                                                       value=1 <?php echo ($category->is_public=== 'Public' )? 'checked': '' ?> >
                                                Public
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="is_public" id="type_sale"
                                                       value=0 <?php echo ($category->is_public==='Private' )? 'checked': '' ?> >
                                                Not Public
                                            </label>
                                        </div>
                                    </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>