 <!-- MODALS -->
 <?php
    //  Main content 
    include('./php/modals.php');
    // include('./SA_regist_Admin.php');
    include('./Add_courses/modalCourse.php');
    include('./Add_student/SA_regist_Student.php');
    include('./Add_lecturer/SA_regist_Lecturer.php')
    // include('./display_view/display_student_list.php');
    // include('./display_view/display_admin_list.php');
    
    // End of of Main content
    ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 <!-- Bootstrap core JavaScript-->
 <script src="../Myvendor1/jquery/jQuery-3.5.1.min.js"></script>
    <script src="../Myvendor1/datatables/jquery.dataTables.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script> <!-- helps to impliment dropdown-->

    <!-- Core plugin JavaScript-->
    <script src="../Myvendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>
    
    <script src="./js/My_course_CRUD.js"></script>
    <script src="./js/My_admin_CRUD.js"></script>
    <script src="./js/My_student_CRUD.js"></script>
    <script src="./js/My_lecturer_CRUD.js"></script>
    <script src="./js/My_department.js"></script>
    <script src="./js/My_speciality_CRUD.js"></script>


    <!-- <script src="./js/myjs.js"></script> -->
    <script src="../Myvendor1/popper/popper-3.5.min.js"></script>
    <script src="../Myvendor1/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../Myvendor1/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
       

        <!-- Page level custom scripts -->
        <script src="./js/demo/datatables-demo.js"></script>
    <!-- <script src="./js/create_account.js"></script> -->

</body>

</html>