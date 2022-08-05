<div class="sidebar">
        <div class="sidebar_content">
            <ul>
                <li>
                    <a href="../admin/dashboard.php" class="
                    <?php
                    if($title=="Dashboard"){
                        echo "active";
                    }
                    else{
                        echo "";
                    }
                    ?>
                    ">
                        <div>
                            <span class="material-symbols-outlined">grid_view</span>
                            Dashboard
                        </div>     
                    </a>
           
                </li>
                <li>
                    <a class="view_tables
                    <?php
                    if($title=="Cinema Monitoring" || $title=="Movies" || $title=="Accounts" || $title=="Movie Configuration"){
                        echo "active";
                    }else{
                        echo "";
                    }
                    ?>
                    ">
                        <div>
                            <span class="material-symbols-outlined">table</span>
                            View Tables
                        </div>
                        <span class="material-symbols-outlined tool-toggler">add</span>
                    </a>
                    <div class="tools_content">
                        <ul>
                            <div class="tables_content">
                                <ul>
                                    <li>
                                        <a href="../admin/view_movies.php" class="
                                        <?php
                                        if($title=="Movies"){
                                            echo "active";
                                        }else{
                                            echo "";
                                        }
                                        ?>
                                        ">
                                        <div>
                                        <span class="material-symbols-outlined">movie_filter</span>
                                        Movies
                                        </div>   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/view_accounts.php" class="
                                        <?php
                                        if($title=="Accounts"){
                                            echo "active";
                                        }else{
                                            echo "";
                                        }
                                        ?>
                                        ">
                                        <div>
                                        <span class="material-symbols-outlined">person</span>
                                        Accounts
                                        </div>   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/view_schedule.php" class="
                                        <?php
                                        if($title=="Movie Schedules"){
                                            echo "active";
                                        }else{
                                            echo "";
                                        }
                                        ?>
                                        ">
                                        <div>
                                        <span class="material-symbols-outlined">timer</span>
                                        Movie Schedules
                                        </div>   
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="admin_tools
                    <?php
                    if($title=="Add Schedule" || $title=="Cinema Types" || $title=="Create a Report" || $title=="Add Merchant"){
                        echo "active";
                    }else{
                        echo "";
                    }
                    ?>
                    ">
                        <div>
                            <span class="material-symbols-outlined">tools_wrench</span>
                            Admin Tools
                        </div>
                        <span class="material-symbols-outlined tool-toggler">add</span>
                    </a>
                    <div class="tools_content">
                        <ul>
                            <div class="tables_content">
                                <ul>
                                    <li>
                                        <a href="../admin/view_locations.php" class="
                                        <?php
                                        if($title=="Cinema Types"){
                                            echo "active";
                                        }else{
                                            echo "";
                                        }
                                        ?>
                                        ">
                                        <div>
                                        <span class="material-symbols-outlined">weekend</span>
                                        Add Cinema Type
                                        </div>   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../admin/view_accounts.php" class="
                                        <?php
                                        if($title=="Create a Report"){
                                            echo "active";
                                        }else{
                                            echo "";
                                        }
                                        ?>
                                        ">
                                        <div>
                                        <span class="material-symbols-outlined">note</span>
                                        Create a Report
                                        </div>   
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="../admin/dashboard.php" class="
                    <?php
                    if($title=="Dashboard"){
                        echo "active";
                    }
                    else{
                        echo "";
                    }
                    ?>
                    ">
                        <div>
                            <span class="material-symbols-outlined">bug_report</span>
                            Reports
                        </div>     
                    </a>
           
                </li>
            </ul>
        </div>
</div>