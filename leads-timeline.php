<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/jquery-ui-1.8.16.custom.css" type="text/css" media="screen, projection">
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
                <a href="index.php"><div class="headerImage"></div></a>
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
                    <a href="#" class="menu-item"><li class="leads-email active"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">dunn@magic.com</span></li></a>
                    <a href="leads-graph.php" class="menu-item"><li class="leads-email"><div class="leads-email-icon icon mrgn-icon-3"></div><span class="label">nikola.radovic@gmail...</span></li></a>
                    <a href="#" class="menu-item"><li class="leads-more"><div class="leads-more-icon icon mrgn-icon-3"></div><span class="label">See all recent (4)</span></li></a>
                    <a href="#" class="menu-item"><li class="getting_started"><div class="getting_started-icon icon mrgn-icon-1"></div><span class="label">Getting Started</span></li></a>
                    <a href="tag-and-rank.php" class="menu-item"><li class="tag_and_rank"><div class="tag_and_rank-icon icon mrgn-icon-1"></div><span class="label">Tag and Rank</span></li></a>
                    <a href="#" class="menu-item"><li class="invite_colleagues"><div class="invite_colleagues-icon icon mrgn-icon-1"></div><span class="label">Invite Colleagues</span></li></a>
                </ul>
            </div>
            <div class="span-19">
                <div id="page-title" class="bg-leads">dunn@magic.com<img src="css/assets/15x8_arrow_down.png"></div>
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
                            <li>See all &gt;</li>
                        </ul>
                    </div>
                </div>
                <div class="horisontal-line">&nbsp;</div>
                <div id="chart-holder">
                    <div id="chart-header">
                        <div class="chart-control">
                            <span class="title click-icon-off bg-pos-2">Clicks</span><div class="icon arrow mrgn-icon-4"></div>
                            <div class="input-box-wrapper mrgn-textbox-1">
                                <input type="text" placeholder="Sep 15, 2011 - Oct 15 2011" class="inputbox wdth-204">
                            </div>
                            <div class="leads-actions-holder"><a href="leads-graph.php" class="chart-view">&nbsp;</a><a href="leads-timeline.php" class="time-view active">&nbsp;</a><a href="leads-list.php" class="tabular-view">&nbsp;</a></div>
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
                        <div class="chart-description">
                            <span>This graph only shows clicks that you have tagged previously</span>
                        </div>
                        <div class="horisontal-line">&nbsp;</div>
                    </div>
                    <div class="clearfix"></div> 
                    <div id="timeline-holder">

                        <div class="timeline-line"></div>
                        <div class="timeline-item left first" >
                            <div class="info-arrows-border ui-state-default"></div>
                            <div class="info-arrows  ui-state-default"></div>
                            <div class="timeline-title">
                                <h4><strong>Personal</strong>
                                    <p class="tag-red">Oct 15 2011 at 4:32 pm</p>
                                </h4>
                            </div>
                            <div class="thumb-holder">
                                <img src="thumbs/preview.png" height="206px" width="242px"></img>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="timeline-item right" >
                            <div class="info-arrows-border ui-state-default"></div>
                            <div class="info-arrows  ui-state-default"></div>
                            <div class="timeline-title">
                                <h4><strong>Get more info</strong>
                                    <p class="tag-purple">Oct 15 2011 at 4:32 pm</p>
                                </h4>
                            </div>
                            <div class="thumb-holder">
                                <img src="thumbs/preview.png" height="206px" width="242px"></img>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="timeline-item right" >
                            <div class="info-arrows-border ui-state-default"></div>
                            <div class="info-arrows  ui-state-default"></div>
                            <div class="timeline-title">
                                <h4><strong>Get more info</strong>
                                    <p class="tag-green">Oct 15 2011 at 4:32 pm</p>
                                </h4>
                            </div>
                            <div class="thumb-holder">
                                <img src="thumbs/preview.png" height="206px" width="242px"></img>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="span-24">
                The footer
            </div>
        </div>
    </body>
</html>
