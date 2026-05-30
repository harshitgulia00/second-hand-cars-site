<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, Helvetica, sans-serif;
    }

    body{
      background:#f5f7fb;
      color:#111827;
    }

    .dashboard{
      padding:25px;
    }

    .title{
      margin-bottom:30px;
    }

    .title h1{
      font-size:38px;
      margin-bottom:8px;
    }

    .title p{
      color:#6b7280;
      font-size:15px;
    }

    .section{
      margin-bottom:35px;
    }

    .section-title{
      font-size:24px;
      margin-bottom:20px;
      font-weight:700;
    }

    .stats-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
      gap:20px;
    }

    .card{
      background:white;
      border-radius:24px;
      padding:24px;
      position:relative;
      overflow:hidden;
      box-shadow:0 10px 25px rgba(0,0,0,0.05);
      border:1px solid #edf1f7;
      transition:0.3s;
    }

    .card:hover{
      transform:translateY(-5px);
      box-shadow:0 18px 35px rgba(0,0,0,0.08);
    }

    .card::before{
      content:'';
      position:absolute;
      width:130px;
      height:130px;
      background:linear-gradient(135deg,#7c3aed,#2563eb);
      border-radius:50%;
      top:-45px;
      right:-45px;
      opacity:0.12;
    }

    .card h3{
      color:#6b7280;
      font-size:14px;
      margin-bottom:12px;
      position:relative;
      z-index:2;
    }

    .card h2{
      font-size:36px;
      position:relative;
      z-index:2;
      margin-bottom:10px;
    }

    .card span{
      color:#16a34a;
      font-size:13px;
      font-weight:600;
      position:relative;
      z-index:2;
    }

    .charts{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:25px;
      margin-top:10px;
    }

    .chart-card{
      background:white;
      border-radius:24px;
      padding:25px;
      box-shadow:0 10px 25px rgba(0,0,0,0.05);
      border:1px solid #edf1f7;
    }

    .chart-card h2{
      margin-bottom:20px;
      font-size:22px;
    }

    canvas{
      width:100% !important;
    }

    @media(max-width:1000px){

      .charts{
        grid-template-columns:1fr;
      }

    }

  </style>

</head>
<body>
    @include('admin.adminPartials.navbar')
  <div class="dashboard">

    <div class="title">
      <h1>Admin Dashboard</h1>
      <p>Overview of platform analytics and requests</p>
    </div>



    <!-- USERS -->

    <div class="section">

      <div class="section-title">
        Users
      </div>

      <div class="stats-grid">

        <div class="card">
          <h3>Total Users</h3>
          <h2>12,450</h2>
          <span>+12% this month</span>
        </div>

        <div class="card">
          <h3>New Users Today</h3>
          <h2>145</h2>
          <span>+5% today</span>
        </div>

        <div class="card">
          <h3>New Users This Month</h3>
          <h2>1,240</h2>
          <span>Growing rapidly</span>
        </div>

      </div>

    </div>



    <!-- CARS -->

    <div class="section">

      <div class="section-title">
        Cars
      </div>

      <div class="stats-grid">

        <div class="card">
          <h3>Total Cars</h3>
          <h2>3,450</h2>
          <span>+9% this month</span>
        </div>

        <div class="card">
          <h3>Active Cars</h3>
          <h2>2,890</h2>
          <span>Currently live</span>
        </div>

        <div class="card">
          <h3>Sold Cars</h3>
          <h2>560</h2>
          <span>+18% sales</span>
        </div>

      </div>

    </div>



    <!-- BUY REQUESTS -->

    <div class="section">

      <div class="section-title">
        Buy Requests
      </div>

      <div class="stats-grid">

        <div class="card">
          <h3>Total Buy Requests</h3>
          <h2>1,240</h2>
          <span>+14% this week</span>
        </div>

        <div class="card">
          <h3>Pending Buy Requests</h3>
          <h2>145</h2>
          <span>Needs approval</span>
        </div>

        <div class="card">
          <h3>Approved Buy Requests</h3>
          <h2>920</h2>
          <span>Successfully approved</span>
        </div>

        <div class="card">
          <h3>Rejected Buy Requests</h3>
          <h2>175</h2>
          <span>Declined requests</span>
        </div>

      </div>

    </div>



    <!-- SELL REQUESTS -->

    <div class="section">

      <div class="section-title">
        Sell Requests
      </div>

      <div class="stats-grid">

        <div class="card">
          <h3>Total Sell Requests</h3>
          <h2>950</h2>
          <span>+10% this week</span>
        </div>

        <div class="card">
          <h3>Pending Sell Requests</h3>
          <h2>120</h2>
          <span>Needs approval</span>
        </div>

        <div class="card">
          <h3>Approved Sell Requests</h3>
          <h2>710</h2>
          <span>Approved successfully</span>
        </div>

        <div class="card">
          <h3>Rejected Sell Requests</h3>
          <h2>120</h2>
          <span>Declined requests</span>
        </div>

      </div>

    </div>



    <!-- CONTACT -->

    <div class="section">

      <div class="section-title">
        Contact Messages
      </div>

      <div class="stats-grid">

        <div class="card">
          <h3>Total Messages</h3>
          <h2>2,430</h2>
          <span>+8% this week</span>
        </div>

        <div class="card">
          <h3>Unread Messages</h3>
          <h2>145</h2>
          <span>Need response</span>
        </div>

        <div class="card">
          <h3>Replied Messages</h3>
          <h2>2,285</h2>
          <span>Handled successfully</span>
        </div>

      </div>

    </div>



    <!-- CHARTS -->

    <div class="section">

      <div class="section-title">
        Analytics
      </div>

      <div class="charts">

        <div class="chart-card">
          <h2>Buy vs Sell Requests</h2>
          <canvas id="buySellChart"></canvas>
        </div>

        <div class="chart-card">
          <h2>Cars By Category</h2>
          <canvas id="carsChart"></canvas>
</div>

      </div>

    </div>



    <!-- STACKED BAR -->

    <div class="section">

      <div class="chart-card">

        <h2 style="margin-bottom:25px;">
          Requests Status Analytics
        </h2>

        <canvas id="statusChart" height="100"></canvas>

      </div>

    </div>


  </div>



  <script>

    $(function(){



      new Chart($('#buySellChart'),{

        type:'doughnut',

        data:{

          labels:[
            'Buy Requests',
            'Sell Requests'
          ],

          datasets:[{

            data:[
              1240,
              950
            ],

            backgroundColor:[
              '#7c3aed',
              '#2563eb'
            ],

            borderWidth:0

          }]

        },

        options:{

          cutout:'70%',

          plugins:{

            legend:{
              position:'bottom'
            }

          }

        }

      });





      new Chart($('#carsChart'),{

        type:'pie',

        data:{

          labels:[
            'SUV',
            'Sedan',
            'Luxury',
            'Sports',
            'EV'
          ],

          datasets:[{

            data:[
              40,
              25,
              15,
              10,
              10
            ],

            backgroundColor:[
              '#7c3aed',
              '#2563eb',
              '#8b5cf6',
              '#60a5fa',
              '#c084fc'
            ],

            borderWidth:0

          }]

        },

        options:{

          plugins:{
            legend:{
              position:'bottom'
            }
          }

        }

      });






      new Chart($('#statusChart'),{

        type:'bar',

        data:{

          labels:[
            'Buy Requests',
            'Sell Requests'
          ],

          datasets:[

            {

              label:'Approved',

              data:[
                920,
                710
              ],

              backgroundColor:'#7c3aed'

            },

            {

              label:'Pending',

              data:[
                145,
                120
              ],

              backgroundColor:'#2563eb'

            },

            {

              label:'Rejected',

              data:[
                175,
                120
              ],

              backgroundColor:'#c084fc'

            }

          ]

        },

        options:{

          responsive:true,

          plugins:{
            legend:{
              position:'bottom'
            }
          },

          scales:{

            x:{
              stacked:true
            },

            y:{
              stacked:true,
              beginAtZero:true,
              grid:{
                color:'rgba(0,0,0,0.05)'
              }
            }

          }

        }

      });




    });

  </script>

</body>
</html>