<div class="table-responsive">
<h2>Category Manager</h2>
<div class="add-new" style="padding-bottom: 50px">
    <a href="?controller=category&action=create"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>New Category</button></a>
</div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Parent Category</th>
                  <th>News Count</th>
                  <th>Name SEO</th>
                  <th>Keyword SEO</th>
                  <th>Description</th>
                  <th>Public</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Tool</th>
                </tr>
              </thead>
              <tbody>
                            <?php foreach ($categories as $category) {
    ?>
                                <tr>
                             <?php echo "<td>$category->name</td>"; ?>
                             <?php echo "<td>$category->parent_id</td>"; ?>
                             <?php echo "<td>$category->newsCount</td>"; ?>
                             <?php echo "<td>$category->name_seo</td>"; ?>
                             <?php echo "<td>$category->keyword_seo</td>"; ?>
                             <?php echo "<td>$category->description</td>"; ?>
                             <?php echo "<td>$category->is_public</td>"; ?>
                             <?php echo "<td>$category->created_at</td>"; ?>
                             <?php echo "<td>$category->updated_at</td>"; ?>
                             <?php echo "
                             <td>
                             <a href='?controller=category&action=edit&id=$category->id'><i class='fa fa-pencil'></i></a>
                             <a href='#' class='delete-category' data-category-id=$category->id><i class='fa fa-trash' style='color:red'></i></a>


                             </td>"
    ; ?>


                            </tr>
                            <?php }?>
                            </tbody>
            </table>
          </div>

