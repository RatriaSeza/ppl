<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sidenav</title>

        <!-- Tailwind -->
		<script src="https://cdn.tailwindcss.com"></script>

        <!-- Icon -->
        <script src="https://kit.fontawesome.com/15d5872470.js" crossorigin="anonymous"></script>

        <!-- Styling -->
		<link rel="stylesheet" href="nav/style_nav_dosen.css" />

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

        
	</head>
	<body class="bg-purple-100">

    <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "ppl";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $pkl17 = "SELECT * FROM mahasiswa WHERE status_mhs='Aktif' AND angkatan='17';";
                $result17 = $conn->query($pkl17);
                $pkl18 = "SELECT * FROM mahasiswa WHERE status_mhs='Aktif' AND angkatan='18';";
                $result18 = $conn->query($pkl18);
                $pkl19 = "SELECT * FROM mahasiswa WHERE status_mhs='Aktif' AND angkatan='19';";
                $result19 = $conn->query($pkl19);
                $pkl20 = "SELECT * FROM mahasiswa WHERE status_mhs='Aktif' AND angkatan='20';";
                $result20 = $conn->query($pkl20);

                $count1=mysqli_num_rows($result17);
                $count2=mysqli_num_rows($result18);
                $count3=mysqli_num_rows($result19);
                $count4=mysqli_num_rows($result20);

                $blm17 = "SELECT * FROM mahasiswa WHERE status_mhs='Cuti' AND angkatan='17';";
                $hasil17 = $conn->query($blm17);
                $blm18 = "SELECT * FROM mahasiswa WHERE status_mhs='Cuti' AND angkatan='18';";
                $hasil18 = $conn->query($blm18);
                $blm19 = "SELECT * FROM mahasiswa WHERE status_mhs='Cuti' AND angkatan='19';";
                $hasil19 = $conn->query($blm19);
                $blm20 = "SELECT * FROM mahasiswa WHERE status_mhs='Cuti' AND angkatan='20';";
                $hasil20 = $conn->query($blm20);

                $hitung1=mysqli_num_rows($hasil17);
                $hitung2=mysqli_num_rows($hasil18);
                $hitung3=mysqli_num_rows($hasil19);
                $hitung4=mysqli_num_rows($hasil20);

                $conn->close();
            ?>


    <div class="grid grid-cols-3">
  <div class="row-span-2">
  <div class="left">
            <div class="user flex card">
                <img id="avatar" src="img/olix.png" alt="" />
                <div class="flex-row ml-5">
                    <p class="username">Olivia Rodrigo</p>
                    <p class="status">
                        Dosen 
                        Fakultas Sains dan Matematika
                    </p>
                </div>
            </div>
            <div class="sidenav card">
                <ul class="grid gap-2">
                    <li><a id="Dashboard" href="../irs (1).php"><img src="nav/icon/IRS.png" alt=""/> Dashboard</a></li><hr>
                    <li><a id="Detail Data Mahasiswa" href="#"><img src="nav/icon/IRS.png" alt=""/> Detail Data Mahasiswa</a></li><hr>
                    <li><a id="Generate Verifikasi Mahasiswa" href="#"><img src="nav/icon/KHS.png" alt=""/> Generate Verifikasi Mahasiswa</a></li><hr>
                    <li><a id="Progres Belajar Mahasiswa" href="#"><img src="nav/icon/PKL.png" alt=""/> Progres Belajar Mahasiswa</a></li><hr>
                    <li><a id="Data PKL Mahasiswa" href="#"><img src="nav/icon/Skripsi.png" alt=""/> Data PKL Mahasiswa</a></li><hr>
                    <li><a id="Data PKL Mahasiswa" href="#"><img src="nav/icon/Skripsi.png" alt=""/> Data Skripsi Mahasiswa</a></li><hr>
                    <li><a id="Keluar" href="#"><img src="nav/icon/Logout.png" alt=""/> Keluar</a></li>
                </ul>
            </div>
        </div>

  </div>
  <div class="col-span-2" style="margin-top:70px;">
  





  <div style="margin-left:5%;margin-right:5%">
        <canvas id="StackedbarChartcanvas" style="width:80%;height:200px"></canvas>
    </div>
    <script>
        var StackedbarChart = {
            labels: [
                "2017",
                "2018",
                "2019",
                "2020"
            ],
            datasets: [
                {
                    label: "Mahasiswa Aktif",
                    backgroundColor: "rgba(191, 0, 255, 0.7)",
                    borderColor: "rgba(191, 0, 255, 1)",
                    borderWidth: 1,
                    data: [<?php echo $count1; ?>, <?php echo $count2; ?>, <?php echo $count3; ?>, <?php echo $count4; ?>]
                },
                {
                    label: "Mahasiswa Cuti",
                    backgroundColor: "blue",
                    borderColor: "blue",
                    borderWidth: 1,
                    data: [<?php echo $hitung1; ?>, <?php echo $hitung2; ?>, <?php echo $hitung3; ?>, <?php echo $hitung4; ?>]
                },
            ]
        };

        var StackedbarChartOptions = {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',//this option is used for place legend on the right side of bar chart
                }
            },
            scales: {
                x: {
                    stacked: true,// this option is used to make the bars stacked
                },
                y: {
                    stacked: true
                }
            },
            title: {
                display: true,
                text: "Chart.js Stacked Bar Chart"
            }
        }

        window.onload = function () {
            var chartData = {
                type: "bar",
                data: StackedbarChart,
                options: StackedbarChartOptions
            }
            new Chart("StackedbarChartcanvas", chartData);
        };

    </script>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden" style="padding-left:20px;padding-right:20px">
      <strong>Daftar Mahasiswa</strong>
        <table class="min-w-full text-center bg-purple-200">
          <thead class="border-b bg-purple-300 ">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                NIM
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Nama
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Angkatan
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Status
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                PKL
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Skripsi
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
          <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ppl";
        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
        $list = "SELECT mahasiswa.NIM, mahasiswa.nama_mhs,mahasiswa.status_mhs, pkl.status_pkl, mahasiswa.angkatan, skripsi.status_skripsi FROM mahasiswa INNER JOIN skripsi INNER JOIN pkl ON mahasiswa.NIM = pkl.nim_mhs AND mahasiswa.NIM = skripsi.nim_mhs;";
        $lists = $conn->query($list);
        if ($lists->num_rows > 0) {
        // output data of each row
        while($row = $lists->fetch_assoc()) {
            echo'<tr>';
            echo'<td>'. $row["NIM"]. '</td>';
            echo'<td>'. $row["nama_mhs"].'</td>';
            echo'<td>'. $row["angkatan"].'</td>';
            echo'<td>'. $row["status_mhs"].'</td>';
            echo'<td>'. $row["status_pkl"].'</td>';
            echo'<td>'. $row["status_skripsi"].'</td>';
            echo'</tr>';
        }
      } else {
        echo "0 results";
      }
      ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



  </div>



  

  



</div>












	</body>
</html>
