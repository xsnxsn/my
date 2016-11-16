<html>
<head></head>
<body>
  <center>
   <form  name="form1" action="formSubmit.php" method="post">
     <table border=1>
       <tr>
         <td>姓名:</td>
         <td>
           <input type="text" name="name" size="12"/>
         </td>
       </tr>
       <tr>
        <td>性别:</td>
        <td>
          <input type="radio" name=sex value="男" checked/>男
          <input type="radio" name=sex value="女"/>女
        </td>
       </tr>
       <tr>
         <td>生日:</td>
         <td>
           <select name ="month">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
          </select>月
          <select name ="day">
           <option value=1>1</option>
           <option value=2>2</option>
           <option value=3>3</option>
           <option value=4>4</option>
           <option value=5>5</option>
         </select>日
         </td>
       </tr>
       <tr>
         <td>爱好:</td>
         <td>
           <input type = "checkbox" name=favior[] value="travel"/>travel
           <input type = "checkbox" name=favior[] value="music"/>music
           <input type = "checkbox" name=favior[] value="sport"/>sport
         </td>
       </tr>
       <tr>
         <td>其他:</td>
         <td>
           <textarea cols=20 rows=3 name = other>其他信心在这里输入:
           </textarea>
         </td>
       </tr>
       <tr>
         <td colspan="2">
           <center>
             <input type=submit value="提交"/>
             <input type=reset value= "重置">
           </center>
         </td>
       </tr>
     </table>
   </form>
  </center>
</body>

</html>
