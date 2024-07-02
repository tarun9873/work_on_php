<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Table Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    
    .responsive-table {
      width: 100%;
      margin-bottom: 1.5em;
    }
    .responsive-table thead {
      position: absolute;
      clip: rect(1px 1px 1px 1px);
      /* IE6, IE7 */
      clip: rect(1px, 1px, 1px, 1px);
      padding: 0;
      border: 0;
      height: 1px;
      width: 1px;
      overflow: hidden;
    }
    .responsive-table thead th {
      background-color: #000;
      border: 1px solid #1d96b2;
      font-weight: normal;
      text-align: center;
      color: white;
    }
    .responsive-table thead th:first-of-type {
      /* text-align: left; */
    }
    .responsive-table tbody,
    .responsive-table tr,
    .responsive-table th,
    .responsive-table td {
      display: block;
      padding: 0;
      text-align: left;
      white-space: normal;
    }
    .responsive-table th,
    .responsive-table td {
      padding: 0.5em;
      vertical-align: middle;
    }
    .responsive-table caption {
      margin-bottom: 1em;
      font-size: 1em;
      font-weight: bold;
      text-align: center;
    }
    .responsive-table tfoot {
      font-size: 0.8em;
      font-style: italic;
    }
    .responsive-table tbody tr {
      margin-bottom: 1em;
      border: 2px solid #1d96b2;
    }
    .responsive-table tbody tr:last-of-type {
      margin-bottom: 0;
    }
    .responsive-table tbody th[scope="row"] {
      background-color: #1d96b2;
      color: white;
    }
    .responsive-table tbody td[data-type="currency"] {
      text-align: right;
    }
    .responsive-table tbody td[data-title]:before {
      content: attr(data-title);
      float: left;
      font-size: 0.8em;
      color: rgba(94, 93, 82, 0.75);
    }
    .responsive-table tbody td {
      text-align: left;
      border: 1px solid #1d96b2;
    }
    
    @media (min-width: 52em) {
      .responsive-table {
        font-size: 0.9em;
      }
      .responsive-table thead {
        position: relative;
        clip: auto;
        height: auto;
        width: auto;
        overflow: auto;
      }
      .responsive-table tr {
        display: table-row;
      }
      .responsive-table th,
      .responsive-table td {
        display: table-cell;
        padding: 0.5em;
      }
    
      .responsive-table caption {
        font-size: 1.5em;
      }
      .responsive-table tbody {
        display: table-row-group;
      }
      .responsive-table tbody tr {
        display: table-row;
        border-width: 1px;
      }
      .responsive-table tbody tr:nth-of-type(even) {
        background-color: rgba(94, 93, 82, 0.1);
      }
      .responsive-table tbody th[scope="row"] {
        background-color: transparent;
        color: #5e5d52;
        text-align: left;
      }
      .responsive-table tbody td {
        text-align: center;
      }
      .responsive-table tbody td[data-title]:before {
        content: none;
      }
    }
    @media (min-width: 62em) {
      .responsive-table {
        font-size: 1em;
      }
      .responsive-table th,
      .responsive-table td {
        padding: 0.75em 0.5em;
      }
      .responsive-table tfoot {
        font-size: 0.9em;
      }
    }
    
    @media (min-width: 75em) {
      .responsive-table th,
      .responsive-table td {
        padding: 0.75em;
      }
    }
      </style>
</head>
<body>
  <div class="container" style="padding: 20px; ">
    <div
        class="container"
        style="margin: auto; margin-top: 50px; margin-bottom: 50px"
      >
        <div class="row">
          <div class="col-md-12" style="text-align: center; padding: 25px">
            <h2>PHP & Ajax</h2>
          </div>
        </div>
        <table id="main" border="0" cellspacing="0">
          <tr>
            <td id="table-load">
              <tr>
              <input type="button" id="load-button" value="Refresh Data">
              </tr>
              <tr>
              <input type="button" onClick="previous()" value="back">
              </tr>
            </td>
            
          </tr>
          <tr>
            <td id="table-data">
              <table class="responsive-table">
              <thead>
            <tr>
              <th scope="col">Fisrt Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
            </tr>
          </thead>
               
          
              </table>
          
            </td>
            
          </tr>
            
          </table>
       
      </div>
  
  </div>

  
<script  type="text/javascript" src="jquary.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#load-button").on("click", function (e) {
      $.ajax({
        url : "ajax.php",
        type : "POST",
        success : function (data) {
          $("#table-data").html(data);
        },
      });
    });
  });



function previous() { 
            window.history.go(-1); 
        } 
</script>
</body>
</html>