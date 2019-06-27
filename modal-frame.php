<?php require "header.php";?>

<div class="container design-layout">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create a Page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group row">
              <label for="page-name" class="col-lg-4">Enter page name</label>
              <div class="col-lg-8"><input type="text" class="form-control"></div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="bt bt-primary">Select</button>
          <button type="button" class="bt bt-primary btn-cancel" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require "footer.php";?>
