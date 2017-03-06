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
                            <h3 class="box-title">Create a new news</h3>
                        </div>
                        <form role="form" action="/?controller=new&action=store" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="name" class="form-control" id="name" name="title"
                                          placeholder="Enterr title">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">
                                    <option value=null>Choose one</option>
                                    <?php foreach ($categories as $category) {
                                       echo "<option value='".$category->id."'>".$category->name."</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea id="content" rows=10 cols="80" name="content" class="form-control">Enter content</textarea>
                                </div>
                                    <div class="form-group">
                                        <label for="sapo">Sapo</label>
                                        <textarea id="sapo" rows=10 cols="80" name="sapo" class="form-control">Enter description</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tag">Tag</label>
                                        <textarea id="tag" rrows=10 cols="80" name="tag" class="form-control">Enter description</textarea>
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
        CKEDITOR.replace( 'content' );
         CKEDITOR.replace( 'sapo' );
          CKEDITOR.replace( 'tag' );
    </script>