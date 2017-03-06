
<div class="table-responsive">
<h2>News Manager</h2>
<div class="add-new" style="padding-bottom: 50px">
    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add News</button>
</div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Sapo</th>
                  <th>Hit</th>
                  <th>Tag</th>
                  <th>Feeback</th>
                  <th> Hot</th>
                  <th>Public</th>
                  <th>Category</th>
                  <th>Pubished At</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Tool</th>
                </tr>
              </thead>
              <tbody>
                            <?php foreach ($news as $new) {
    ?>
                                <tr>
                             <?php echo "<td>$new->title</td>"; ?>
                             <?php echo "<td>" . substr($new->content, 0, 250) . "...</td>"; ?>
                             <?php echo "<td>" . substr($new->sapo, 0, 250) . "...</td>"; ?>
                             <?php echo "<td>$new->hit</td>"; ?>
                             <?php echo "<td>$new->tag</td>"; ?>
                             <?php echo "<td>$new->feedback</td>"; ?>
                              <?php echo "<td>$new->is_hot</td>"; ?>
                             <?php echo "<td>$new->is_public</td>"; ?>
                              <?php echo "<td>$new->category_id</td>"; ?>
                              <?php echo "<td>$new->published_at</td>"; ?>
                             <?php echo "<td>$new->created_at</td>"; ?>
                             <?php echo "<td>$new->updated_at</td>"; ?>
                             <?php echo "
                             <td>
                             <a href='?controller=new&action=edit&id=$new->id'><i class='fa fa-pencil'></i></a>
                               <a href='#' class='delete-new' data-new-id=$new->id><i class='fa fa-trash' style='color:red'></i></a>
                             </td>"
          ; ?>


                            </tr>
                            <?php }?>
                            </tbody>
            </table>
          </div>

