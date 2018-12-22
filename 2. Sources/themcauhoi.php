<!--add quiz end-->

<!--add quiz step2 start-->
<?php
if(@$_GET['q']=="themcauhoi") {
    echo ' 
        <div class="row">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Điền câu hỏi muốn thêm</b></span><br /><br />
         <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=themcauhoi&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
        <fieldset>
        ';

    
        echo '<b>Câu hỏi: &nbsp;&nbsp;:</><br /><!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="qns"></label>  
          <div class="col-md-12">
          <textarea rows="3" cols="5" name="qns" class="form-control" placeholder="Điền câu hỏi"  here..."></textarea>  
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="1"></label>  
          <div class="col-md-12">
          <input id="1" name="1" placeholder="Lựa chọn a" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="2"></label>  
          <div class="col-md-12">
          <input id="2" name="2" placeholder="Lựa chọn b" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="3"></label>  
          <div class="col-md-12">
          <input id="3" name="3" placeholder="Lựa chọn c" class="form-control input-md" type="text">
            
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-12 control-label" for="4"></label>  
          <div class="col-md-12">
          <input id="4" name="4" placeholder="Lựa chọn d" class="form-control input-md" type="text">
            
          </div>
        </div>
        <br />
        <b>Đáp án</b>:<br />
        <select id="ans" name="ans" placeholder="Đáp án " class="form-control input-md" >
           <option value="a">Chọn đáp án cho câu </option>
          <option value="a">a</option>
          <option value="b">b</option>
          <option value="c">c</option>
          <option value="d">d</option> </select><br /><br />


        <br />
        <b>Độ khó (3 là cao nhất)</b>:<br />
        <select id="qlevel" name="qlevel" placeholder="Độ khó " class="form-control input-md" >
           <option value="a">Chọn độ khó cho câu </option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select><br /><br />';
        
    

    echo '<div class="form-group">
          <label class="col-md-12 control-label" for=""></label>
          <div class="col-md-12">
            <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Lưu" class="btn btn-primary"/>
          </div>
        </div>

        </fieldset>
        </form></div>';



}
?>