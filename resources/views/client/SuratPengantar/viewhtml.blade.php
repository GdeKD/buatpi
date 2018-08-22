<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Surat Pengantar</title>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <style type="text/css">
    html{
      font-family:Andale Mono, monospace;
      line-height:1.15;
      -webkit-text-size-adjust:100%;
      -ms-text-size-adjust:100%;
      -ms-overflow-style:scrollbar;
      -webkit-tap-highlight-color:transparent
    }
    @-ms-viewport{width:device-width}
    article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}

    body{
      margin:0;
      /* font-family:Raleway,sans-serif; */
      font-family: Times New Roman, serif;
      font-size:.9rem;
      font-weight:400;
      line-height:1.6;
      color:#212529;
      text-align:left;
      /* background-color:#f5f8fa */
    }
    [tabindex="-1"]:focus{outline:0!important}

    table{border-collapse:collapse}
    .container{
      width:100%;
      /* padding-right:15px; */
      /* padding-left:15px; */
      margin-right:3cm;
      margin-left:3cm;
      margin-top: 3cm;
      margin-bottom: 3cm;
    }
    @media (min-width:576px){.container{max-width:540px}}
    @media (min-width:768px){.container{max-width:720px}}
    @media (min-width:992px){.container{max-width:960px}}
    @media (min-width:1200px){.container{max-width:1140px}}
    .row{
      display:-webkit-box;
      display:-ms-flexbox;
      display:flex;
      -ms-flex-wrap:wrap;
      flex-wrap:wrap;
      margin-right:-15px;
      margin-left:-15px
    }

    .text-left{text-align:left}
    .text-right{text-align:right}
    .text-center{text-align:center!important}

    .table-bordered,.table-bordered td,.table-bordered th{border:1px solid #dee2e6}
    .table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}
    .table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}
    .table-hover tbody tr:hover{background-color:rgba(0,0,0,.075)}
    .table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}
    .table-hover .table-primary:hover,.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}
    .table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}
    .table-hover .table-secondary:hover,.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}
    .table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}
    .table-hover .table-success:hover,.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}
    .table-info,.table-info>td,.table-info>th{background-color:#bee5eb}
    .table-hover .table-info:hover,.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}
    .table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}
    .table-hover .table-warning:hover,.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}
    .table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}
    .table-hover .table-danger:hover,.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}
    .table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}
    .table-hover .table-light:hover,.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}
    .table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}
    .table-hover .table-dark:hover,.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}
    .table-active,.table-active>td,.table-active>th,.table-hover .table-active:hover,.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}
    .table .thead-dark th{color:#f5f8fa;background-color:#212529;border-color:#32383e}
    .table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}
    .table-dark{color:#f5f8fa;background-color:#212529}
    .table-dark td,.table-dark th,.table-dark thead th{border-color:#32383e}
    .table-dark.table-bordered{border:0}
    .table-dark.table-striped tbody tr:nth-of-type(odd){background-color:hsla(0,0%,100%,.05)}
    .table-dark.table-hover tbody tr:hover{background-color:hsla(0,0%,100%,.075)}
    @media (max-width:575.98px){
      .table-responsive-sm{
        display:block;width:100%;
        overflow-x:auto;-webkit-overflow-scrolling:touch;
        -ms-overflow-style:-ms-autohiding-scrollbar
      }
      .table-responsive-sm>.table-bordered{border:0
      }
    }
    @media (max-width:767.98px){
      .table-responsive-md{
        display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar
      }
      .table-responsive-md>.table-bordered{
        border:0
      }
    }
    </style>

  </head>
  <body>
    <div class="container">
      <h1></h1>
    </div>

    <!-- batas cobaan -->
    <div class="container">
        <div style="justify-content:center">
           <!-- justify-content-center -->
          <p class="text-center">
            sadaksndjansd
            <span>
              <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
            </span>
          </p>
          <table class="table table-bordered text-center">
            <thead>
              <th>Name</th>
              <th>Email</th>
            </thead>
            <tbody>
              @foreach ($users as $key => $value)
              <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
  </body>
</html>
