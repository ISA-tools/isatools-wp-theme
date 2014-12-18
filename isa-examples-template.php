<?php
/**
 * Template Name: ISA-Tab Examples Template
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

<div class="site-content" style="width:100%;margin-top: 20px">
<br/>
<h2 style="font-size:1.6em; font-weight: lighter; color: #aaa; text-align: center">ISA-Tab Examples</h2>
<br/>

<p>Several examples of <strong>ISA-Tab</strong> formatted metadata files are available in the table below.

If you need help or want more examples, <a href="mailto:isatools@googlegroups.com?subject=Format query" target="_blank"><strong>contact the ISA team</strong></a>.

These files are shown using the <a href="https://github.com/ISA-tools/ISATab-Viewer" target="_blank">ISA-Tab viewer</a> which you can use on your site too!</p>

<br/>

<div id="investigation_file" class="isa-view">
    <div class="toolbar">
        Select ISA-Tab file to view

        <select onchange="load_file();" id="gist_id" name="gist">
            <option value="c3c4306af5916856c607">BII-I-1</option>
            <option value="2c606f6be7fc59ff196c">BII-S-3</option>
            <option value="69d28fb0e4be360f60fb">BII-S-4</option>
            <option value="5a56f8815bbb7374fddd">BII-S-6</option>
            <option value="1efdee0b13baf35335b1">BII-S-8</option>
        </select>


        <div style="float: right; margin-right: 25px; margin-top: 3px" id="download-button">
        </div>
    </div>

    <div class="clearfix"></div>
    <br/>

    <div class="isa-study-list">
        <h3>Studies</h3>
        <ul id="study-list">
        </ul>
    </div>

    <div class="isa-main-view">
        <div class="isa-breadcrumbs">
            <ul id="isa-breadcrumb-items">
            </ul>
        </div>
        <div class="cf"></div>
        <div id="study-info"></div>
    </div>
</div>

</div>


<link href="/wp-content/themes/isatools-wp-theme/assets/css/ISATabViewer.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="/wp-content/themes/isatools-wp-theme/assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/isatools-wp-theme/assets/js/handlebars-v1.3.0.js"></script>
<script type="text/javascript" src="/wp-content/themes/isatools-wp-theme/assets/js/ISATabViewer.js"></script>
<script type="text/javascript">
    //    BII-I-1 c3c4306af5916856c607
    ISATabViewer.rendering.render_isatab_from_gist('c3c4306af5916856c607', '#investigation_file', {});
    //    ISATabViewer.rendering.render_isatab_from_file('test_data_sets/BII-S-3/i_gilbert.txt', '#investigation_file', {});
</script>

<script>
        function load_file() {
            var value = $("#gist_id").val();
            ISATabViewer.rendering.render_isatab_from_gist(value, '#investigation_file', {})
        }
    </script>

<script id="study-list-template" type="text/x-handlebars-template">

    {{#each studies}}
    <li id="list-{{this}}" onclick="ISATabViewer.rendering.render_study('{{this}}')">
        {{this}}
    </li>
    {{/each}}

</script>

<script id="table-template" type="text/x-handlebars-template">

    <table id="assay-table" class="table table-hover">
        <thead>
        <tr>
            {{#each headers}}
            <th>{{this}}</th>
            {{/each}}
        </thead>
        </tr>
        <tbody>
        {{#each rows}}
        <tr>
            {{#each columns}}
            <td>{{this}}</td>
            {{/each}}
        </tr>
        {{/each}}
        </tbody>
    </table>

</script>

<script id="sample-distribution-template" type="text/x-handlebars-template">
    <ul id="sample_stats">
        {{#each sample_stats}}
        <li>
            <p class="characteristic_type">{{name}}</p>
            {{#each distribution}}
            <div class="distribution-group">
                <div class="distribution">{{name}}</div>
                <div class="distribution-value"><span>{{value}}</span></div>
            </div>
            <div class="cf"></div>
            {{/each}}
        </li>

        {{/each}}
    </ul>
</script>

<script id="study-template" type="text/x-handlebars-template">

    <div id="study-title">{{study_title}}</div>
    <div id="study-description">{{study_description}}</div>

    <div class="cf"></div>
    <br/>

    <div id="samples">
        <div class="section-header">Samples</div>

        <div class="clearfix"></div>

        <br/><br/>

        <span class="button-green" style="width:auto;"
              onclick="ISATabViewer.rendering.render_assay('{{study_id}}','{{study_file}}')"> View Samples</span>

        <br/><br/>

        <div id="sample-distribution">
            <ul id="sample_stats">
                {{#each sample_stats}}
                <li>
                    <p class="characteristic_type">{{name}}</p>
                    {{#each distribution}}
                    <div class="distribution-group">
                        <div class="distribution">{{name}}</div>
                        <div class="distribution-value"><span>{{value}}</span></div>
                    </div>
                    <div class="cf"></div>
                    {{/each}}
                </li>
                {{/each}}
            </ul>
        </div>

    </div>

    <div id="assays">
        <div class="section-header">Assays</div>
        <ul>
            {{#each assays}}
            <li class="assay-item">
                <div class="assay-icon {{icon}}"></div>
                <p class="measurement-type">{{[Study Assay Measurement Type]}}</p>

                <p class="technology-type">{{[Study Assay Technology Type]}}</p>

                <p class="technology-platform">{{[Study Assay Technology Platform]}}</p>

                <p class="assay-file-name">{{[Study Assay File Name]}}</p>

                <br/>
                        <span class="button-green" style="width:auto;"
                              onclick="ISATabViewer.rendering.render_assay('{{../study_id}}','{{[Study Assay File Name]}}')">
                            View Assay </span>
            </li>
            {{/each}}
        </ul>
    </div>

    <div class="cf"></div>

    <div id="publications">

        <div class="section-header">Publications</div>
        <ul>
            {{#each publications}}
            <li>
                <p class="publication-title">{{[Study Publication Title]}}</p>

                <p class="publication-authors">{{[Study Publication Author List]}}</p>

                <p class="publication-pubmedid">Pubmed ID <span style="color:#24AE5F">{{[Study PubMed ID]}}</span></p>

                <p class="publication-doi">DOI <span style="color:#24AE5F">{{[Study Publication DOI]}}</span></p>
            </li>
            {{/each}}
        </ul>
    </div>

    <div class="cf"></div>
    <br/><br/>

    <div id="contacts">

        <div class="section-header">Contacts</div>
        <ul>
            {{#each contacts}}
            <li>
                <p class="publication-title">{{[Study Person First Name]}} {{[Study Person Last Name]}}</p>

                <p class="publication-authors">{{[Study Person Address]}}</p>

                <p class="publication-pubmedid">{{[Study Person Affiliation]}}</span></p>
            </li>
            {{/each}}
        </ul>
    </div>

    <div id="factors">

        <div class="section-header">Factors</div>
        <ul>
            {{#each factors}}
            <li>
                <p class="protocol-name">{{[Study Factor Name]}} ({{[Study Factor Type]}})</p>
            </li>
            {{/each}}
        </ul>
    </div>

    <div id="protocols">
        <div class="section-header">Protocols</div>
        <ul>
            {{#each protocols}}
            <li>
                <p class="protocol-name">{{[Study Protocol Name]}} ({{[Study Protocol Type]}})</p>
            </li>
            {{/each}}
        </ul>
    </div>

</script>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>