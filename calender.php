<?php
session_start();
include_once("admin/includes/application.php");
$id="6";

//this is comment section


//this is comment section
//this is comment section
//this is comment section
//this is comment section

//my name is rajendra


//my name is rajendra yadav name comment 2


$page_name=fetch_data($id, "iona_pages", "page_id", "page_title");
$meta_title=fetch_data($id, "iona_pages", "page_id", "meta_title");
$meta_desc=fetch_data($id, "iona_pages", "page_id", "meta_desc");
$meta_key=fetch_data($id, "iona_pages", "page_id", "meta_key");
$page_desc=fetch_data($id, "iona_pages", "page_id", "page_desc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$meta_title;?></title>
<meta name="description" content="<?=$meta_desc;?>"/>
<meta name="KEYWORDS" content="<?=$meta_key;?>"/>
<link href="script/style.css" rel="stylesheet" type="text/css" />
<link href="script/menu.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include("header.php");?></td>
  </tr>
  <tr>
    <td><table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="left"><img src="images/banner_shadow.jpg" width="995" height="10" alt="" /></td>
      </tr>
      <tr>
        <td><table width="998" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="717" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="main_txt_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" class="welcome_txt" ><strong><?=$page_name;?></strong></td>
                        <td><img src="images/welcome_round.jpg" width="22" height="46" alt="" /></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><hr size="1" color="#e0e9ed"/></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
				  <?php if($page_desc!=""){ ?>
				  <tr>
                    <td>
						<table border="0" cellspacing="0" cellpadding="0" width="95%" align="center">	
						<tr>
							<td><?=$page_desc;?></td>
						</tr>
						</table>
					</td>
                  </tr>
				   <tr>
                    <td>&nbsp;</td>
                  </tr>
				  <?php } ?>
                  <tr>
                    <td valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><table width="80%" border="0" cellspacing="0" cellpadding="3">
						<?php
						$count_cal=$db->siri_count("select count(*) from iona_calender where display_status=1");
						if($count_cal>0)
						{	
							$n=0;
							$qry_cal="select *, date_format(calender_date, '%d %b %Y') as date from iona_calender where display_status=1 order by calender_date desc";
							$exe_cal=$db->siri_query($qry_cal);
							while($cal_data=$db->siri_fetch_array($exe_cal))
							{		
								$n++;
						?>
                          <tr>
                            <td align="left"> &nbsp; <img src="images/main_arrow.jpg" alt="" width="4" height="8" hspace="5" /> <a href="event_detail.php?cid=<?=$cal_data['cid'];?>"><?=stripslashes($cal_data['date']);?>&nbsp;<?=stripslashes($cal_data['event_title']);?></a></td>
                          </tr>
						    <tr>
                            <td align="left"><?php if($n<$count_cal){ ?><hr size="1" color="#e1eaee"/><?php }else{ echo "&nbsp;"; } ?></td>
                          </tr>
						  <?php }}else{ ?>
						  <tr>
                            <td align="center" style="color:red;">No Event Available!</td>
                          </tr>
						  <?php } ?>
                          <tr>
                            <td align="left">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>                      
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      </table></td>
                  </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="1%"><img src="images/lb_bottom_left.gif" width="19" height="17" alt="" /></td>
                    <td width="98%" bgcolor="#EEF8FC" ></td>
                    <td width="1%"><img src="images/lb_bottom_right.gif" width="19" height="17" alt="" /></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td width="287" align="right" valign="top"><?php include("right_panel.php");?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="footer_icon_bg"><?php include("footer_partners.php");?></td>
  </tr>
  <tr>
    <td><?php include("footer.php");?></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
</table>
</body>
</html>
