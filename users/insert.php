<?php include $_SERVER['DOCUMENT_ROOT'].'/mdi_con.php';?>

<?php
    $id   = $_POST["id"];               // 아이디
    $pass = $_POST["pass"];             // 비밀번호
    $name = $_POST["name"];             // 이름
    $email  = $_POST["email"];          // 이메일

    $regist_day = date("Y-m-d (H:i)");  // UTC 현재 '년-월-일 (시:분)'
              


	$sql = "insert into members (id, pass, name, email, regist_day, data1_cpu, data2_cpu, data3_cpu, data4_cpu, data5_cpu, data1_device, data2_device, data3_device, data4_device, data5_device) ";    // 데이터 삽입 명령
	$sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', '','' ,'' ,'' ,'', '','' ,'' ,'' ,'' )";       

	mysqli_query($con, $sql);       // SQL 명령 실행
    mysqli_close($con);     

    // 로그인 폼으로 이동

?>

<script>
        location.href = './user_RegisterForm.php';
        if ((document.member.id.value)&&(document.member.pass.value)&&(document.member.name.value)&&(document.member.email.value))
      {
        location.href = './user_LoginForm.php';

      }
</script>
  
