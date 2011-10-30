<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
        <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print"> 
        <!--[if lt IE 8]>
        <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection">
        <![endif]-->
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="span-24">
                <div class="headerImage"></div>
                <div id="searchwrapper">
                    <form action="#">
                        <input type="image" src="css/assets/15x15_search_icon.png" class="searchbox_submit" value="" />
                        <input type="text" class="searchbox" name="s" placeholder="Search for user with email address" />
                    </form>
                </div>
                <ul id="logged_user">
                    <li><span>Nikola Džona Radović</span>
                    <dd><a href="#">Profile</a></dd>
                    <dd><a href="#">Account</a></dd>
                    <dd><a href="#">Help</a></dd>
                    <dd><a href="#">Logout</a></dd>
                    <dd class="dd-bottom"><div class="dd-bottom-left">&nbsp;</div><div class="dd-bottom-right">&nbsp;</div></dd>
                    </li>
                </ul>
            </div>

            <div class="span-6">
                <ul>
                    <a href="index.php" class="menu-item"><li class="dashboard"><div class="dashboard-icon icon mrgn-icon-1"></div><span class="label">Dashboard</span></li></a>
                    <a href="leads.php" class="menu-item"><li class="leads active"><div class="arrow arrow mrgn-arrow"></div><div class="leads-icon icon mrgn-icon-2"></div><span class="label">Leads</span><div class="num_box"><span>1234</span></div></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">psheffie@gmail.com</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">soham.mehta@gmail...</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">dunn@magic.com</span></li></a>
                    <a href="leads-graph.php" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">nikola.radovic@gmail...</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-more"><div class="leads-more-icon icon mrgn-icon-3"></div><span class="label">See all recent (4)</span></li></a>
                    <a href="#" class="menu-item"><li class="getting_started"><div class="getting_started-icon icon mrgn-icon-1"></div><span class="label">Getting Started</span></li></a>
                    <a href="tag-and-rank.php" class="menu-item"><li class="tag_and_rank"><div class="tag_and_rank-icon icon mrgn-icon-1"></div><span class="label">Tag and Rank</span></li></a>
                    <a href="#" class="menu-item"><li class="invite_colleagues"><div class="invite_colleagues-icon icon mrgn-icon-1"></div><span class="label">Invite Colleagues</span></li></a>
                </ul>
            </div>
            <div class="span-19">
                <div id="page-title">Leads<span class="help">Click on a lead to get more information</span></div>
                
                <div class="horisontal-line">&nbsp;</div>

                <div id="leads-holder">
                    <div id="leads-header">
                        <div class="leads-control">
                            <span class="title leads-email-icon-off bg-pos-2">Leads</span><div class="icon arrow mrgn-icon-4"></div>
                            <div class="input-box-wrapper mrgn-textbox-1">
                                <input type="text" class="inputbox wdth-204" placeholder="Sep 15, 2011 - Oct 15 2011" />
                            </div>

                            <div class="dd-button-list-holder mrgn-button-1">
                                <a class="dd-button" href="#"><span class="wdth-89">Sort by Date<img class="mrgn-lft-5" src="css/assets/arrow_down_off.png"></span></a>
                                <ul class="dd-button-list wdth-119">
                                    <li><a href="#" class="sort-check bg-pos-5">Date</a></li>
                                    <li><a href="#">Click Tag</a></li>
                                    <li><a href="#"># Clicks</a></li>
                                    <li><a href="#">Rank</a></li>
                                    <li class="dd-bottom"><div class="dd-bottom-left">&nbsp;</div><div class="dd-bottom-right">&nbsp;</div></li>
                                </ul>
                            </div>

                        </div>
                        <div class="horisontal-line">&nbsp;</div>
                        <div class="leads-description">
                            <div class="relative-holder">


                                <span class="lft-20">Score</span>
                                <span class="lft-100">Leads in Bold are ones that you have not viewed yet</span>
                                <span class="lft-530">Clicks</span>
                                <span class="lft-590">Date</span>
                            </div>
                        </div>
                    </div>
                    <table id="leads-content" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col" class="left-corner"></th>
                                <th scope="col" colspan="7" class="up-frame"></th>
                                <th scope="col" class="right-corner"></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td scope="col" class="left-corner"></td>
                                <td scope="col" colspan="7" class="bottom-frame"></td>
                                <td scope="col" class="right-corner"></td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr class="row bold">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">67812</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">4521</td>
                                <td class="leads-col-1">Some User</td>
                                <td class="leads-col-2">test@domain.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">2133</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">6674</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">3322</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">32445</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">3322</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">32445</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">3322</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">32445</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                            <tr class="row">
                                <td class="first-col"></td>
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                                <td class="last-col"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="span-24">
                The footer
            </div>
        </div>
    </body>
</html>
