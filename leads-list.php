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
                    <li><span>Nikola Radović</span>
                    <dd class="top-1"><a href="#">Profile</a></dd>
                    <dd class="top-2"><a href="#">Account</a></dd>
                    <dd class="top-3"><a href="#">Help</a></dd>
                    <dd class="top-4"><a href="#">Logout</a></dd>
                    <dd class="dd-bottom top-5"><div class="dd-bottom-left">&nbsp;</div><div class="dd-bottom-right">&nbsp;</div></dd>
                    </li>
                </ul>
            </div>

            <div class="span-6">
                <ul>
                    <a href="index.php" class="menu-item"><li class="dashboard"><div class="dashboard-icon icon mrgn-icon-1"></div><span class="label">Dashboard</span></li></a>
                    <a href="leads.php" class="menu-item"><li class="leads"><div class="arrow arrow mrgn-arrow"></div><div class="leads-icon icon mrgn-icon-2"></div><span class="label">Leads</span><div class="num_box"><span>1234</span></div></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">psheffie@gmail.com</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">soham.mehta@gmail...</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">dunn@magic.com</span></li></a>
                    <a href="leads-graph.php" class="menu-item"><li class="leads-email active"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">nikola.radovic@gmail...</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-more"><div class="leads-more-icon icon mrgn-icon-3"></div><span class="label">See all recent (4)</span></li></a>
                    <a href="#" class="menu-item"><li class="getting_started"><div class="getting_started-icon icon mrgn-icon-1"></div><span class="label">Getting Started</span></li></a>
                    <a href="tag-and-rank.php" class="menu-item"><li class="tag_and_rank"><div class="tag_and_rank-icon icon mrgn-icon-1"></div><span class="label">Tag and Rank</span></li></a>
                    <a href="#" class="menu-item"><li class="invite_colleagues"><div class="invite_colleagues-icon icon mrgn-icon-1"></div><span class="label">Invite Colleagues</span></li></a>
                </ul>
            </div>
            <div class="span-19">
                <div id="page-title" class="bg-leads">nikola.radovic@gmail.com<img src="css/assets/15x8_arrow_down.png" /></div>

                <div class="horisontal-line">&nbsp;</div>

                <div id="pie-holder">
                    <div class="pie1">&nbsp;</div>
                    <div class="google-map">
                        <b>Aproximate Location</b>
                        <div class="map-img"></div>    
                    </div>
                    <div class="pie-description-1">
                        <b>Submitted Info</b>
                        <ul>
                            <li>Philip Sheffield</li>
                            <li>psheffie@gmail.com</li>
                            <li>408-340-3613</li>
                            <li>Credit Card</li>
                            <li>Creative Director</li>
                            <li>Pro</li>
                            <li>See all ></li>
                        </ul>
                    </div>
                </div>

                <div class="horisontal-line">&nbsp;</div>

                <div id="leads-list-holder">
                    <div id="leads-list-header">
                        <div class="leads-list-control">
                            <span class="title click-icon-off bg-pos-2">Clicks</span><div class="icon arrow mrgn-icon-4"></div>
                            <div class="input-box-wrapper mrgn-textbox-1">
                                <input type="text" class="inputbox wdth-204" placeholder="Sep 15, 2011 - Oct 15 2011" />
                            </div>
                            <div class="leads-actions-holder"><a class="chart-view" href="leads-graph.php">&nbsp;</a><a class="time-view" href="leads-timeline.php">&nbsp;</a><a class="tabular-view active" href="leads-list.php">&nbsp;</a></div>
                            
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
                        <div class="leads-list-description">
                            <div class="relative-holder">
                                <span class="lft-0">Rank</span>
                                <span class="lft-49">Click tag</span>
                                <span class="lft-203">Web page</span>
                                <span class="lft-430"># Clicks</span>
                                <span class="lft-487">Last clicked</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="horisontal-line">&nbsp;</div> 	
                    <table id="leads-list-content" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="row bold">
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">67</td>
                                <td class="leads-col-1">Name of tag</td>
                                <td class="leads-col-2">http://www.reallylongsite.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/02/2011 - 10:15pm</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">45</td>
                                <td class="leads-col-1">Some User</td>
                                <td class="leads-col-2">test@domain.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">23</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">6674</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">33</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">32</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">32</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">35</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-green bg-pos-6">32</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">1254</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">35</td>
                                <td class="leads-col-1">Philip Sheffield</td>
                                <td class="leads-col-2">psheffie@gmail.com</td>
                                <td class="clicks">421</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-red bg-pos-6">87</td>
                                <td class="leads-col-1">Soham Mehta</td>
                                <td class="leads-col-2">soham.mehta@gmail.com</td>
                                <td class="clicks">49</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row bold">
                                <td class="col-separator"></td>
                                <td class="score lead-purple bg-pos-6">85</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">87</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-blue bg-pos-6">12</td>
                                <td class="leads-col-1">Unidentified</td>
                                <td class="leads-col-2">unknown</td>
                                <td class="clicks">6</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-separator"></td>
                                <td class="score lead-yellow bg-pos-6">7</td>
                                <td class="leads-col-1">Nikola Radović</td>
                                <td class="leads-col-2">dzona065@gmail.com</td>
                                <td class="clicks">4</td>
                                <td class="date">10/01/2011</td>
                                <td class="col-separator"></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="horisontal-line">&nbsp;</div>
                    
                </div>
            </div>
            <div class="span-24">
                The footer
            </div>
        </div>
    </body>
</html>
