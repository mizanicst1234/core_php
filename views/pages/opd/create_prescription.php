<style>

    .s{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .w{       
        width: 90%;
        box-shadow:0 0 4px 5px rgba(0,0,0,.4);
        padding:20px;
        box-sizing:border-box;
    }
  .r{
    display:flex;
    flex-flow:row wrap;
  }
  .c{}
  .c1{
      width:30%;
  }
  .c2{
    width:70%;
  }
</style>

<div>
    <h1>Create Prescription</h1>
</div>


<section class="s">
<div class="w">

<div class="r">

</div>
<div class="r">
   <div class="c c1">
       <div>
         <h4>CC</h4>
         <textarea id="cc">

         </textarea>
       </div>
       <div>
         <h4>RF</h4>
         <textarea id="rf">
            
         </textarea>
       </div>
       <div>
         <h4>Investigation</h4>
         <textarea id="insv">
            
         </textarea>
       </div>
  </div>
  <div class="c c2">
       <table width="100%">
         <tr>
            <th>Medicine</th>
            <th>Dose</th>
            <th>Days</th>
            <th>Suggestion</th>
         </tr>
         <tr>
            <td>
                <select  style="width:100%">
                    <option>Medicine..</option>
                </select>
            </td>
            <td>
                <select style="width:100%">
                    <option>0-0-1</option>
                    <option>0-1-0</option>
                    <option>1-0-0</option>
                </select>
            </td>
            <td>
                <select style="width:100%">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

            </td>
            <td><input type="text" id="suggestion" placeholder="suggestion" /></td>
         </tr>
      </table>
  </div>
</div>

</div>

</section>