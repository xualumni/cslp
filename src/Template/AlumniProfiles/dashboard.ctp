<body>
    <!--Start of Whole wrapper -->
    <div id="wrapper">
        

<!--Start of Top Navigation-->
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <!--Xavier Logo-->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><?php echo $this->Html->image('logo_side.png', array('alt' => 'CakePHP', 'width'=>'160px', 'height'=>'40px')); ?></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!--Start of Settings -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="href="/users/login" class="fa fa-sign-out fa-lg""></i> 
                    </a>
                    <li><h5><a href="/users/login" class="fa fa-sign-out fa-lg"></a></h5></li>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </nav>
        <!--End of Top Navigation-->




        <!--Start of Side Navigation  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="/AlumniProfiles/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="/AlumniProfiles/index"><i class="fa fa-users"></i> Profiles</a>
                    <li>
                        <a href="/AlumniProfiles/import"><i class="fa fa-list-alt"></i> Import Data</a>
                    </li>
                </ul>
        </nav>
        <!--End of Side Navigation  -->
        


        <!--Start of Content -->      
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-11">
                        <!--Title and subtitle -->
                        <h1 class="page-header">Dashboard</h1>
                            <div class="row">
                                <div class="panel-body table-responsive">
                                    <!-- Dashboard Function-->
                                     Welcome to the XU Alumni Office Profiling System. XU Alumni Profiling System has 5 major components: Import, Add, View, Edit and Delete profiles. These so called components are the basic features of the program that will help the admin store the data efficiently to the database. For the user access level, the application can be accessed by any user who has the administrative account credentials. To get started, please follow the instructions below:
                                    <br><br>
                                    <tr>
                                        <u>For adding data:</u><br>
                                        Locate PROFILES on the Navigation bar   and select the add button   located on the upper right side of the table. This functionality allows you to add new data to the database.<br><br>
                                        <?php echo $this->Html->image('add.png', array('alt' => 'CakePHP', 'width'=>'683', 'height'=>'384')); ?>

                                    </tr>
                                    <br><br>
                                    <tr>
                                        <u>For editing data:</u><br>
                                        Locate PROFILES on the Navigation bar   and select the edit button   found on every data entered to the database . This functionality allows for editing of existing data for corrections.<br><br>
                                        <?php echo $this->Html->image('edit.png', array('alt' => 'CakePHP', 'width'=>'683', 'height'=>'384')); ?>
                                        
                                    </tr>
                                    <br><br>
                                    <tr>
                                        <u>For deleting data:</u><br>
                                        Locate PROFILES on the Navigation bar   and select the delete button  found on every data entered to the database . This functionality allows the admin to delete data in the existing database . 

                                    </tr>
                                    <br><br>
                                    <tr>
                                        <u>For importing Data:</u><br>
                                        The system requires the user to import data using the file extention CSV with file name csv_file . 
                                        Click on IMPORT on the Navigation bar   and under Import Data, click choose files. Select your target csv entitled csv_file, then click submit. Once submitted, the data is now automatically stored in the database.<br><br>
                                        <?php echo $this->Html->image('import.png', array('alt' => 'CakePHP', 'width'=>'683', 'height'=>'384')); ?>

                                        
                                    </tr>
                                    <br><br>
                                    <tr>
                                        <u>For searching data:</u><br>
                                        Locate PROFILES on the Navigation bar   then use the search form located at the upper portion of the table.<br><br>
                                        <?php echo $this->Html->image('search.png', array('alt' => 'CakePHP', 'width'=>'683', 'height'=>'384')); ?>

                                    </tr>
                                    <br><br>
                                    <tr>
                                        <u>For viewing data:</u><br>
                                        Locate PROFILES on the Navigation bar and select the view button.<br><br>
                                        <?php echo $this->Html->image('view.png', array('alt' => 'CakePHP', 'width'=>'683', 'height'=>'384')); ?>
                                        
                                    </tr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Content -->
    

    </div>
    <!--End of Whole wrapper -->


</body>
</html>
