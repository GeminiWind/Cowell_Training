<div class="content-wrapper" style="min-height: 901px;">
        <div style="padding: 0px; background: white; z-index: 999999; font-size: 16px; font-weight: 600;"></div>
        <section class="content-header">
            <h1>
                Create a new category
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create a new book</h3>
                        </div>
                        <form role="form" action="/?controller=category&action=store" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" id="name" name="name"
                                          placeholder="Nhập tên app">
                                </div>
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control" name="parent_id">
                                    <option value=null>Choose one</option>
                                    <?php foreach ($categories as $category) {
                                       echo "<option value='".$category->id."'>".$category->name."</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name_seo">Name SEO</label>
                                    <textarea id="name_seo" rows=8 name="name_seo" class="form-control">Enter name SEO</textarea>
                                </div>
                                    <div class="form-group">
                                        <label for="keyword_seo">Keyword SEO</label>
                                        <textarea id="keyword_seo" rows=8 name="keyword_seo" class="form-control">Enter keyword SEO</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" rows=8 name="description" class="form-control">Enter description</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Published</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="is_public" id="type_free"
                                                       value=1 checked >
                                                Public
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="is_public" id="type_sale"
                                                       value=0>
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
     <script>
          CKEDITOR.replace( 'description' );
    </script>