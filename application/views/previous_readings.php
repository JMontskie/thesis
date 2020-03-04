<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Previous Readings</h1>
          <p class="mb-4">The data shown here are the previous readings made by the Fruit Scanner.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Readings</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Reading ID</th>
                      <th>Date</th>
                      <th>Acidity</th>
                      <th>Sugar</th>
                      <th>Spice</th>
                      <th>Everything Nice</th>
                      <th>Ripeness</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Reading ID</th>
                      <th>Date</th>
                      <th>Acidity</th>
                      <th>Sugar</th>
                      <th>Spice</th>
                      <th>Everything Nice</th>
                      <th>Ripeness</th>
                      <th>Description</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($dataview as $data):?>
                    <tr>
                        <td><p id="id"><?=$data->read_id?></p></td>
                        <td><p id="date"><?=$data->read_date?></p></td>
                        <td><p id="reading1"><?=$data->read_val1?></p></td>
                        <td><p id="reading2"><?=$data->read_val2?></p></td>
                        <td><p id="reading3"><?=$data->read_val3?></p></td>
                        <td><p id="reading4"><?=$data->read_val4?></p></td>
                        <td><p id="ripeness"><?=$data->read_ripeness?></p></td>
                        <td><p id="description"><?=$data->read_inter?></p></td>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->