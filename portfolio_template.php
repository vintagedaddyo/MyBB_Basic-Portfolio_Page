<!--
/**
 *
 * MyBB 1.8
 * portfolio template
 * Tutorial by: vintagedaddyo
 * https://community.mybb.com/user-6029.html
 *
 */
-->
<head>
<title>{$mybb->settings['bbname']} - Portfolio</title>
{$headerinclude}
<link href="{$mybb->asset_url}/portfolio/lightbox/css/lightbox.css" rel="stylesheet">
<script src="{$mybb->asset_url}/portfolio/lightbox/js/lightbox.js"></script>
</head><body id="portfolio">
{$header}
<table border="0" cellspacing="0" cellpadding="4" class="tborder">
  <thead>
    <tr>
      <td class="thead" colspan="2"><strong>Project - One</strong>
        <div class="expcolimage"><img src="{$theme['imgdir']}/collapse{$collapsedimg['folio1']}.png" id="folio1_img" class="expander" alt="[-]" title="[-]" /></div></td>
    </tr>
  </thead>
  <tbody style="{$collapsed['folio1_e']}" id="folio1_e">
    <tr>
      <td class="trow1"><a href="{$mybb->asset_url}/portfolio/img/folio1/folio1a.png" data-lightbox="folio1" data-title="Project One A"><img src="{$mybb->asset_url}/portfolio/img/folio1/folio1a.png" alt="" style="max-width: 100%"/></a> <a href="{$mybb->asset_url}/portfolio/img/folio1/folio1b.png" data-lightbox="folio1" data-title="Project One B" ></a> <a href="{$mybb->asset_url}/portfolio/img/folio1/folio1c.png" data-lightbox="folio1" data-title="Project One C" ></a></td>
      <td class="trow1" width="30%"><div class="post_controls">
          <h2>Project One Title</h2>
        </div>
        <p><strong>Description:&nbsp;</strong> Commodo celos purus consequat diam rapide volutpat interdum responder porttitor quis sodales vehicula est netus blandit quis posuere populos erat sapien neque tempus non diam ligula litteratura fringilla duis molestie non congue elementum bibendum phasellus uso curae; populos posuere sagittis neque mauris qui risus nulla nisl lacinia eros tincidunt post non cras scelerisque sed lacinia prime connectiones ultrices dolor leo eros nam sodales mauris sit vestibulum basate faucibus</p>
        <div class="post_controls"></div>
        <br />
        <div class="float_right"><a href="#" class="button new_reply_button">Project One Link</a></div>
        <strong>Status: &nbsp;</strong>
        <h3 style="color:#2CAA3A;"> <img src="images/valid.png">
            Complete </h3>
        </td>
    </tr>
</table>
<br />
<table border="0" cellspacing="0" cellpadding="4" class="tborder">
  <thead>
    <tr>
      <td class="thead" colspan="2"><strong>Project - Two</strong>
        <div class="expcolimage"><img src="{$theme['imgdir']}/collapse{$collapsedimg['folio2']}.png" id="folio2_img" class="expander" alt="[-]" title="[-]" /></div></td>
    </tr>
  </thead>
  <tbody style="{$collapsed['folio2_e']}" id="folio2_e">
    <tr>
      <td class="trow1"><a href="{$mybb->asset_url}/portfolio/img/folio2/folio2a.png" data-lightbox="folio2" data-title="Project Two A"><img src="{$mybb->asset_url}/portfolio/img/folio2/folio2a.png" alt="" style="max-width: 100%"/></a> <a href="{$mybb->asset_url}/portfolio/img/folio2/folio2b.png" data-lightbox="folio2" data-title="Project Two B" ></a> <a href="{$mybb->asset_url}/portfolio/img/folio2/folio2c.png" data-lightbox="folio2" data-title="Project Two C" ></a></td>
      <td class="trow1" width="30%"><div class="post_controls">
          <h2>Project Two Title</h2>
        </div>
        <p><strong>Description:&nbsp;</strong> Commodo celos purus consequat diam rapide volutpat interdum responder porttitor quis sodales vehicula est netus blandit quis posuere populos erat sapien neque tempus non diam ligula litteratura fringilla duis molestie non congue elementum bibendum phasellus uso curae; populos posuere sagittis neque mauris qui risus nulla nisl lacinia eros tincidunt post non cras scelerisque sed lacinia prime connectiones ultrices dolor leo eros nam sodales mauris sit vestibulum basate faucibus</p>
        <div class="post_controls"></div>
        <br />
        <div class="float_right"><a href="#" class="button new_reply_button">Project Two Link</a></div>
        <strong>Status: &nbsp;</strong>
        <h3 style="color:#A21111;">
        <img src="images/invalid.png">
        Not Yet Complete </h3>
        </td>
    </tr>
</table>
<br />
<table border="0" cellspacing="0" cellpadding="4" class="tborder">
  <thead>
    <tr>
      <td class="thead" colspan="2"><strong>Project - Three</strong>
        <div class="expcolimage"><img src="{$theme['imgdir']}/collapse{$collapsedimg['folio3']}.png" id="folio3_img" class="expander" alt="[-]" title="[-]" /></div></td>
    </tr>
  </thead>
  <tbody style="{$collapsed['folio3_e']}" id="folio3_e">
    <tr>
      <td class="trow1"><a href="{$mybb->asset_url}/portfolio/img/folio3/folio3a.png" data-lightbox="folio3" data-title="Project Three A"><img src="{$mybb->asset_url}/portfolio/img/folio3/folio3a.png" alt="" style="max-width: 100%"/></a> <a href="{$mybb->asset_url}/portfolio/img/folio3/folio3b.png" data-lightbox="folio3" data-title="Project Three B" ></a> <a href="{$mybb->asset_url}/portfolio/img/folio3/folio3c.png" data-lightbox="folio3" data-title="Project Three C" ></a></td>
      <td class="trow1" width="30%"><div class="post_controls">
          <h2>Project Three Title</h2>
        </div>
        <p><strong>Description:&nbsp;</strong> Commodo celos purus consequat diam rapide volutpat interdum responder porttitor quis sodales vehicula est netus blandit quis posuere populos erat sapien neque tempus non diam ligula litteratura fringilla duis molestie non congue elementum bibendum phasellus uso curae; populos posuere sagittis neque mauris qui risus nulla nisl lacinia eros tincidunt post non cras scelerisque sed lacinia prime connectiones ultrices dolor leo eros nam sodales mauris sit vestibulum basate faucibus</p>
        <div class="post_controls"></div>
        <br />
        <div class="float_right"><a href="#" class="button new_reply_button">Project Three Link</a></div>
        <strong>Status: &nbsp;</strong>
        <h3 style="color:#2CAA3A;"> <img src="images/valid.png">
        Complete</h3>
        </td>
    </tr>
</table>
<br />
<table border="0" cellspacing="0" cellpadding="4" class="tborder">
  <thead>
    <tr>
      <td class="thead" colspan="2"><strong>Project - Four</strong>
        <div class="expcolimage"><img src="{$theme['imgdir']}/collapse{$collapsedimg['folio4']}.png" id="folio4_img" class="expander" alt="[-]" title="[-]" /></div></td>
    </tr>
  </thead>
  <tbody style="{$collapsed['folio4_e']}" id="folio4_e">
    <tr>
      <td class="trow1"><a href="{$mybb->asset_url}/portfolio/img/folio4/folio4a.png" data-lightbox="folio4" data-title="Project Four A"><img src="{$mybb->asset_url}/portfolio/img/folio4/folio4a.png" alt="" style="max-width: 100%"/></a> <a href="{$mybb->asset_url}/portfolio/img/folio4/folio4b.png" data-lightbox="folio4" data-title="Project Four B" ></a> <a href="{$mybb->asset_url}/portfolio/img/folio4/folio4c.png" data-lightbox="folio4" data-title="Project Four C" ></a></td>
      <td class="trow1" width="30%"><div class="post_controls">
          <h2>Project Four Title</h2>
        </div>
        <p><strong>Description:&nbsp;</strong> Commodo celos purus consequat diam rapide volutpat interdum responder porttitor quis sodales vehicula est netus blandit quis posuere populos erat sapien neque tempus non diam ligula litteratura fringilla duis molestie non congue elementum bibendum phasellus uso curae; populos posuere sagittis neque mauris qui risus nulla nisl lacinia eros tincidunt post non cras scelerisque sed lacinia prime connectiones ultrices dolor leo eros nam sodales mauris sit vestibulum basate faucibus</p>
        <div class="post_controls"></div>
        <br />
        <div class="float_right"><a href="#" class="button new_reply_button">Project Four Link</a></div>
        <strong>Status: &nbsp;</strong>
        <h3 style="color:#2CAA3A;"> <img src="images/valid.png">
        Complete</h3>
      </td>
    </tr>
</table>
<br />
<span class="smalltext">Portfolio by:  <a href="http://community.mybb.com/user-6029.html" target="_blank">Vintagedaddyo</a></span>
{$footer}
</body>
</html>