<?php
declare(strict_types=1);
/**
 * This file is a part of the Ophp framework
 *
 * @package Ophp\WP\Debug\Render
 */
namespace Ophp\WP\Debug\Render;

use Ophp\WP\Debug\Render\AbstractRender;

/**
 * This class implements usefull methods for debug rendering in google chart format.
 */
class GoogleOrganizationChart extends AbstractRender
{
}

/*
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart01_div"></div>
<div id="chart02_div"></div>

      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart01);
      google.charts.setOnLoadCallback(drawChart02);

      function drawChart01() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Tag');
        data.addColumn('string', 'Parent');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
            ['is_archive', ''],
          ['is_author', 'is_archive'],
          ['is_category', 'is_archive'],
          ['is_tax', 'is_archive'],
          ['is_tag', 'is_archive'],
          ['is_date', 'is_archive'],
          ['is_day', 'is_date'],
          ['is_month', 'is_date'],
          ['is_year', 'is_date']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart01_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }

      function drawChart02() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Tag');
        data.addColumn('string', 'Parent');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
                    ['is_singular', ''],
          ['is_single', 'is_singular'],
          ['is_attachment', 'is_single'],
          ['is_page', 'is_singular']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart02_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }

 */
