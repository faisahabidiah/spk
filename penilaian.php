<?php 

require_once("include/header.php")

 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Penilaian
        <small>Tables Pair Comparation</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="panel panel-default">
        <div class="row-fluid">
          <div class="col-md-10">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Matrik Perbandingan Kriteria Berpasangan</h3>
              </div>
            <div class="row-fluid">
              <div class="span12">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                    <div class="panel-heading">
                      <b>Matrik Kriteria</b>
                    </div>
                  <form method="post" action="">
                    <table class="table table-bordered table-striped table-hover" border="3 ">
                      <tr>
                        <td></td>
                        <td>Loyalitas</td>
                        <td>Pencapaian Kerja</td>
                        <td>Pengalaman Memimpin</td>
                      </tr>
                      <tr>
                        <td>Loyalitas</td>
                        <td><input type="text" name="data1" class="form-control" disabled value="1"></td>
                        <td>
                          <div class="form-group">
                            <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>  
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <tr>
                          <td>Pencapaian Kerja</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                          <td><input type="text" name="data2" class="form-control" value="1" disabled /></td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>Pengalaman Memimpin</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td><input type="text" name="data3" class="form-control" value="1" disabled /></td>
                        </tr>
                      </tr>
                    </table>
                  </form>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Matrik Perbandingan Alternatif
                    <small>Matrik Alternatif untuk Kriteria</small></h3>
              </div>
              <div class="tab-pane active" id="tab1">
                <div class="panel-heading">
                    <b>Loyalitas</b>
                </div>
                  
                  <form method="post" action="">
                    <table class="table table-bordered" border="3 ">
                      <tr>
                        <td></td>
                        <td>Arta</td>
                        <td>Adam</td>
                        <td>Basuki</td>
                      </tr>
                      <tr>
                        <td>Arta</td>
                        <td><input type="text" name="data1" class="form-control" disabled value="1"></td>
                        <td>
                          <div class="form-group">
                            <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>  
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <tr>
                          <td>Adam</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                          <td><input type="text" name="data2" class="form-control" value="1" disabled /></td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>Basuki</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td><input type="text" name="data3" class="form-control" value="1" disabled /></td>
                        </tr>
                      </tr>
                    </table>
                  </form>
                  </div>
            </div>

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Matrik Perbandingan Alternatif
                    <small>Matrik Alternatif untuk Kriteria</small></h3>
              </div>
                <div class="tab-pane active" id="tab1">
                  <div class="panel-heading">
                    <b>Pencapaian Kerja</b>
                  </div>
                  <form method="post" action="">
                    <table class="table table-bordered" border="3 ">
                      <tr>
                        <td></td>
                        <td>Arta</td>
                        <td>Adam</td>
                        <td>Basuki</td>
                      </tr>
                      <tr>
                        <td>Arta</td>
                        <td><input type="text" name="data1" class="form-control" disabled value="1"></td>
                        <td>
                          <div class="form-group">
                            <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>  
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <tr>
                          <td>Adam</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                          <td><input type="text" name="data2" class="form-control" value="1" disabled /></td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>Basuki</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td><input type="text" name="data3" class="form-control" value="1" disabled /></td>
                        </tr>
                      </tr>
                    </table>
                  </form>
                  </div>
            </div>

            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Matrik Perbandingan Alternatif
                    <small>Matrik Alternatif untuk Kriteria</small></h3>
              </div>
              <div class="tab-pane active" id="tab1">
                  <div class="panel-heading">
                    <b>Pengalaman Memimpin</b>
                  </div>
                  <form method="post" action="">
                    <table class="table table-bordered" border="3 ">
                      <tr>
                        <td></td>
                        <td>Arta</td>
                        <td>Adam</td>
                        <td>Basuki</td>
                      </tr>
                      <tr>
                        <td>Arta</td>
                        <td><input type="text" name="data1" class="form-control" disabled value="1"></td>
                        <td>
                          <div class="form-group">
                            <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>  
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <tr>
                          <td>Adam</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                          <td><input type="text" name="data2" class="form-control" value="1" disabled /></td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria2" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        </tr>
                        <tr>
                          <td>Basuki</td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                          <select name="kriteria1" class="form-control">
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                          </select>
                          </div>
                        </td>
                        <td><input type="text" name="data3" class="form-control" value="1" disabled /></td>
                        </tr>
                      </tr>
                    </table>
                  </form>
                  </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>
  </div>

<?php require_once 'include/footer.php'; ?>