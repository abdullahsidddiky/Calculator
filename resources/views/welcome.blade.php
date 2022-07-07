@extends('links')  <!--importing necessary bootstrap links--->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculation</title>
  </head>
  <body>
    <br>
          <div class="container" align='center'>
          <form  method="POST">
               {{csrf_field()}}
            <div class="form-control">
            <label for="operand1">Operand 1</label>
            <input type="text" name="op1" value="">
            </div>
           <br>
             <div class="form-control">
             <label for="operand2">Operand 2</label>
             <input type="text" name="op2" value="">
             </div>
             <br>
           <div class="form-control">
             <select class="form-select" name = "operator">
             <option value="+">&#x1F47D;</option>
             <option value="-">&#x1F480;</option>
             <option value="*">&#x1F47B;</option>
             <option value="/">&#x1F631;</option>
             </select>
           </div>
           <br>
           <button type="submit" class="btn btn-primary">calculate</button>
         </form>
         <table class="table" >
           <thead>
             <tr>
               <th scope="col">Result</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>{{$res}}</td>
             </tr>
           </tbody>
         </table>
         </div>
  </body>
</html>
