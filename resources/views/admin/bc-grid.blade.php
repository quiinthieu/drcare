@extends('layouts.admin-special')
@section('content')
    <div class="row">
        <!-- [ grid ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Grid System</h5>
                </div>
                <div class="card-body">
                    <p>Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a
                        twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of
                        predefined
                        classes.</p>
                    <h5 class="mt-5">How it works</h5>
                    <hr>
                    <p>Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align
                        content. It’s built with <a
                            href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexbox</a>
                        and is fully responsive. Below is an example and an in-depth look at how the grid comes
                        together.</p>
                    <p><strong>New to or unfamiliar with flexbox?</strong> <a
                            href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background">Read this
                            CSS Tricks flexbox guide</a> for background,
                        terminology, guidelines, and code snippets.</p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    One of three columns
                                </div>
                                <div class="col-sm">
                                    One of three columns
                                </div>
                                <div class="col-sm">
                                    One of three columns
                                </div>
                            </div>
                        </div>
                        <pre>
                            <code class="language-markup">
                                &lt;div class="container"&gt;
                                    &lt;div class="row"&gt;
                                        &lt;div class="col-sm"&gt;
                                            One of three columns
                                        &lt;/div&gt;
                                        &lt;div class="col-sm"&gt;
                                            One of three columns
                                        &lt;/div&gt;
                                        &lt;div class="col-sm"&gt;
                                            One of three columns
                                        &lt;/div&gt;
                                    &lt;/div>
                                &lt;/div>
                            </code>
                        </pre>
                    </div>
                    <p>The above example creates three equal-width columns on small, medium, large, and extra large
                        devices using our predefined grid classes. Those columns are centered in the page with the
                        parent
                        <code class="highlighter-rouge">.container</code>.
                    </p>
                    <p>Breaking it down, here’s how it works:</p>
                    <ul>
                        <li>Containers provide a means to center and horizontally pad your site’s contents. Use <code
                                class="highlighter-rouge">.container</code> for a responsive pixel width or <code
                                class="highlighter-rouge">.container-fluid</code>
                            for
                            <code class="highlighter-rouge">width: 100%</code> across all viewport and device sizes.
                        </li>
                        <li>Rows are wrappers for columns. Each column has horizontal <code class="highlighter-rouge">padding</code>
                            (called a gutter) for controlling the space between them. This <code
                                class="highlighter-rouge">padding</code>
                            is then counteracted on the rows with negative margins. This way, all the content in your
                            columns is visually aligned down the left side.
                        </li>
                        <li>In a grid layout, content must be placed within columns and only columns may be immediate
                            children of rows.
                        </li>
                        <li>Thanks to flexbox, grid columns without a specified <code
                                class="highlighter-rouge">width</code> will automatically layout as equal width columns.
                            For example, four instances of <code
                                class="highlighter-rouge">.col-sm</code>
                            will each automatically be 25% wide from the small breakpoint and up. See the <a
                                href="#auto-layout-columns">auto-layout columns</a> section for more examples.
                        </li>
                        <li>Column classes indicate the number of columns you’d like to use out of the possible 12 per
                            row. So, if you want three equal-width columns across, you can use <code
                                class="highlighter-rouge">.col-4</code>.
                        </li>
                        <li>Column <code class="highlighter-rouge">width</code>s are set in percentages, so they’re
                            always fluid and sized relative to their parent element.
                        </li>
                        <li>Columns have horizontal <code class="highlighter-rouge">padding</code> to create the gutters
                            between individual columns, however, you can remove the <code class="highlighter-rouge">margin</code>
                            from rows and <code class="highlighter-rouge">padding</code> from columns with <code
                                class="highlighter-rouge">.no-gutters</code> on the <code
                                class="highlighter-rouge">.row</code>.
                        </li>
                        <li>To make the grid responsive, there are five grid breakpoints, one for each <a
                                href="/docs/4.1/layout/overview/#responsive-breakpoints">responsive breakpoint</a>: all
                            breakpoints (extra small),
                            small, medium, large, and extra large.
                        </li>
                        <li>Grid breakpoints are based on minimum width media queries, meaning <strong>they apply to
                                that one breakpoint and all those above it</strong> (e.g., <code
                                class="highlighter-rouge">.col-sm-4</code>
                            applies to small, medium, large, and extra large devices, but not the first <code
                                class="highlighter-rouge">xs</code> breakpoint).
                        </li>
                        <li>You can use predefined grid classes (like <code class="highlighter-rouge">.col-4</code>) or
                            <a href="#sass-mixins">Sass mixins</a> for more semantic markup.
                        </li>
                    </ul>
                    <p>Be aware of the limitations and <a href="https://github.com/philipwalton/flexbugs">bugs around
                            flexbox</a>, like the <a href="https://github.com/philipwalton/flexbugs#flexbug-9">inability
                            to use some
                            HTML elements as flex containers</a>.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Grid Options</h5>
                </div>
                <div class="card-body">
                    <p>While Bootstrap uses <code class="highlighter-rouge">em</code>s or <code
                            class="highlighter-rouge">rem</code>s for defining most sizes, <code
                            class="highlighter-rouge">px</code>s are used for grid
                        breakpoints and container widths. This is because the viewport width is in pixels and does not
                        change with the <a href="https://drafts.csswg.org/mediaqueries-3/#units">font size</a>.</p>
                    <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">
                                    Extra small
                                    <br/>
                                    <small>&lt;576px</small>
                                </th>
                                <th class="text-center">
                                    Small
                                    <br/>
                                    <small>&ge;576px</small>
                                </th>
                                <th class="text-center">
                                    Medium
                                    <br/>
                                    <small>&ge;768px</small>
                                </th>
                                <th class="text-center">
                                    Large
                                    <br/>
                                    <small>&ge;992px</small>
                                </th>
                                <th class="text-center">
                                    Extra large
                                    <br/>
                                    <small>&ge;1200px</small>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">Max container width</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                                <td>960px</td>
                                <td>1140px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Class prefix</th>
                                <td><code>.col-</code></td>
                                <td><code>.col-sm-</code></td>
                                <td><code>.col-md-</code></td>
                                <td><code>.col-lg-</code></td>
                                <td><code>.col-xl-</code></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row"># of columns</th>
                                <td colspan="5">12</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Gutter width</th>
                                <td colspan="5">30px (15px on each side of a column)</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Nestable</th>
                                <td colspan="5">Yes</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Column ordering</th>
                                <td colspan="5">Yes</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Auto-layout Columns</h5>
                </div>
                <div class="card-body">
                    <p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered
                        class like <code class="highlighter-rouge">.col-sm-6</code>.</p>
                    <h5 class="mt-5">Equal-width</h5>
                    <hr>
                    <p>For example, here are two grid layouts that apply to every device and viewport, from <code
                            class="highlighter-rouge">xs</code> to <code class="highlighter-rouge">xl</code>. Add any
                        number of unit-less
                        classes for each breakpoint you need and every column will be the same width.</p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    1 of 2
                                </div>
                                <div class="col">
                                    2 of 2
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col">
                                    2 of 3
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            1 of 2
        &lt;/div&gt;
        &lt;div class="col"&gt;
            2 of 2
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            1 of 3
        &lt;/div&gt;
        &lt;div class="col"&gt;
            2 of 3
        &lt;/div&gt;
        &lt;div class="col"&gt;
            3 of 3
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <p>Equal-width columns can be broken into multiple lines, but there was a <a
                            href="https://github.com/philipwalton/flexbugs#flexbug-11">Safari flexbox bug</a> that
                        prevented this from working without an
                        explicit
                        <code class="highlighter-rouge">flex-basis</code> or <code
                            class="highlighter-rouge">border</code>. There are workarounds for older browser versions,
                        but they shouldn’t be necessary if you’re
                        up-to-date.</p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="w-100"></div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="w-100"&gt;&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Setting one column width</h5>
                    <hr>
                    <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the
                        sibling columns automatically resize around it. You may use predefined grid classes (as shown
                        below),
                        grid mixins, or inline widths. Note that the other columns will resize no matter the width of
                        the center column.</p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-6">
                                    2 of 3 (wider)
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-5">
                                    2 of 3 (wider)
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            1 of 3
        &lt;/div&gt;
        &lt;div class="col-6"&gt;
            2 of 3 (wider)
        &lt;/div&gt;
        &lt;div class="col"&gt;
            3 of 3
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            1 of 3
        &lt;/div&gt;
        &lt;div class="col-5"&gt;
            2 of 3 (wider)
        &lt;/div&gt;
        &lt;div class="col"&gt;
            3 of 3
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

                                                </code>
                                            </pre>
                    </div>
                    <h5 class="mt-5">Variable width content</h5>
                    <hr>
                    <p>Use <code class="highlighter-rouge">col-{breakpoint}-auto</code> classes to size columns based on
                        the natural width of their content.</p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                    1 of 3
                                </div>
                                <div class="col-md-auto">
                                    Variable width content
                                </div>
                                <div class="col col-lg-2">
                                    3 of 3
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-md-auto">
                                    Variable width content
                                </div>
                                <div class="col col-lg-2">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row justify-content-md-center"&gt;
        &lt;div class="col col-lg-2"&gt;
            1 of 3
        &lt;/div&gt;
        &lt;div class="col-md-auto"&gt;
            Variable width content
        &lt;/div&gt;
        &lt;div class="col col-lg-2"&gt;
            3 of 3
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            1 of 3
        &lt;/div&gt;
        &lt;div class="col-md-auto"&gt;
            Variable width content
        &lt;/div&gt;
        &lt;div class="col col-lg-2"&gt;
            3 of 3
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <h5 class="mt-5">Equal-width multi-row</h5>
                    <hr>
                    <p>Create equal-width columns that span multiple rows by inserting a <code
                            class="highlighter-rouge">.w-100</code> where you want the columns to break to a new line.
                        Make the breaks responsive by mixing
                        the
                        <code class="highlighter-rouge">.w-100</code> with some <a href="/docs/4.1/utilities/display/">responsive
                            display utilities</a>.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="w-100"></div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="w-100"&gt;&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Responsive Classes</h5>
                </div>
                <div class="card-body">
                    <p>Bootstrap’s grid includes five tiers of predefined classes for building complex responsive
                        layouts. Customize the size of your columns on extra small, small, medium, large, or extra large
                        devices
                        however you see fit.</p>
                    <h5 class="mt-5">All breakpoints</h5>
                    <hr>
                    <p>For grids that are the same from the smallest of devices to the largest, use the <code
                            class="highlighter-rouge">.col</code> and <code class="highlighter-rouge">.col-*</code>
                        classes. Specify a numbered
                        class when you need a particularly sized column; otherwise, feel free to stick to <code
                            class="highlighter-rouge">.col</code>.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                            </div>
                            <div class="row">
                                <div class="col-8">col-8</div>
                                <div class="col-4">col-4</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;div class="col"&gt;col&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-8"&gt;col-8&lt;/div&gt;
    &lt;div class="col-4"&gt;col-4&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <h5 class="mt-5">Stacked to horizontal</h5>
                    <hr>
                    <p>Using a single set of <code class="highlighter-rouge">.col-sm-*</code> classes, you can create a
                        basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code
                            class="highlighter-rouge">sm</code>).</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">col-sm-8</div>
                                <div class="col-sm-4">col-sm-4</div>
                            </div>
                            <div class="row">
                                <div class="col-sm">col-sm</div>
                                <div class="col-sm">col-sm</div>
                                <div class="col-sm">col-sm</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-sm-8"&gt;col-sm-8&lt;/div&gt;
    &lt;div class="col-sm-4"&gt;col-sm-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-sm"&gt;col-sm&lt;/div&gt;
    &lt;div class="col-sm"&gt;col-sm&lt;/div&gt;
    &lt;div class="col-sm"&gt;col-sm&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Mix and match</h5>
                    <hr>
                    <p>Don’t want your columns to simply stack in some grid tiers? Use a combination of different
                        classes for each tier as needed. See the example below for a better idea of how it all
                        works.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                            </div>
                            <div class="row">
                                <div class="col-6">.col-6</div>
                                <div class="col-6">.col-6</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;
&lt;div class="row"&gt;
	&lt;div class="col-12 col-md-8"&gt;.col-12 .col-md-8&lt;/div&gt;
	&lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;
&lt;div class="row"&gt;
	&lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
	&lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
	&lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;
&lt;div class="row"&gt;
	&lt;div class="col-6"&gt;.col-6&lt;/div&gt;
	&lt;div class="col-6"&gt;.col-6&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Alignment</h5>
                </div>
                <div class="card-body">
                    <p>Use flexbox alignment utilities to vertically and horizontally align columns.</p>

                    <h5 class="mt-5">Vertical alignment</h5>
                    <hr>
                    <div class="bd-example-row bd-example-row-flex-cols">
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                                <div class="col">
                                    One of three columns
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
	&lt;div class="row align-items-start"&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row align-items-center"&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="row align-items-end"&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
		&lt;div class="col"&gt;
			One of three columns
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <div class="bd-example-row bd-example-row-flex-cols">
                        <div class="container">
                            <div class="row">
                                <div class="col align-self-start">
                                    One of three columns
                                </div>
                                <div class="col align-self-center">
                                    One of three columns
                                </div>
                                <div class="col align-self-end">
                                    One of three columns
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col align-self-start"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col align-self-center"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col align-self-end"&gt;
            One of three columns
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Horizontal alignment</h5>
                    <hr>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-4">
                                    One of two columns
                                </div>
                                <div class="col-4">
                                    One of two columns
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    One of two columns
                                </div>
                                <div class="col-4">
                                    One of two columns
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-4">
                                    One of two columns
                                </div>
                                <div class="col-4">
                                    One of two columns
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-4">
                                    One of two columns
                                </div>
                                <div class="col-4">
                                    One of two columns
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    One of two columns
                                </div>
                                <div class="col-4">
                                    One of two columns
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row justify-content-start"&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row justify-content-end"&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row justify-content-around"&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row justify-content-between"&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
        &lt;div class="col-4"&gt;
            One of two columns
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">No gutters</h5>
                    <hr>
                    <p>The gutters between columns in our predefined grid classes can be removed with <code
                            class="highlighter-rouge">.no-gutters</code>. This removes the negative <code
                            class="highlighter-rouge">margin</code>s
                        from
                        <code class="highlighter-rouge">.row</code> and the horizontal <code class="highlighter-rouge">padding</code>
                        from all immediate children columns.</p>
                    <p>Here’s the source code for creating these styles. Note that column overrides are scoped to only
                        the first children columns and are targeted via <a
                            href="https://developer.mozilla.org/en-US/docs/Web/CSS/Attribute_selectors">attribute
                            selector</a>. While this generates a more specific selector, column padding can still be
                        further customized with <a href="/docs/4.1/utilities/spacing/">spacing utilities</a>.</p>
                    <p><strong>Need an edge-to-edge design?</strong> Drop the parent <code class="highlighter-rouge">.container</code>
                        or <code class="highlighter-rouge">.container-fluid</code>.</p>
                    <pre>
											<code class="language-scss">
.no-gutters {
    margin-right: 0;
    margin-left: 0;

    > .col,
    > [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
    }
}
                                            </code>
                                        </pre>
                    <p>In practice, here’s how it looks. Note you can continue to use this with all other predefined
                        grid classes (including column widths, responsive tiers, reorders, and more).</p>
                    <div class="bd-example-row">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
                            <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row no-gutters"&gt;
    &lt;div class="col-12 col-sm-6 col-md-8"&gt;.col-12 .col-sm-6 .col-md-8&lt;/div&gt;
    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Column wrapping</h5>
                    <hr>
                    <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one
                        unit, wrap onto a new line.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-9">.col-9</div>
                                <div class="col-4">.col-4
                                    <br/>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line
                                    as one contiguous unit.
                                </div>
                                <div class="col-6">.col-6
                                    <br/>Subsequent columns continue along the new line.
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-9"&gt;.col-9&lt;/div&gt;
    &lt;div class="col-4"&gt;.col-4
        &lt;br /&gt;Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
    &lt;/div&gt;
    &lt;div class="col-6"&gt;.col-6
        &lt;br /&gt;Subsequent columns continue along the new line.
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Column breaks</h5>
                    <hr>
                    <p>Breaking columns to a new line in flexbox requires a small hack: add an element with <code
                            class="highlighter-rouge">width: 100%</code> wherever you want to wrap your columns to a new
                        line. Normally
                        this is accomplished with multiple
                        <code class="highlighter-rouge">.row</code>s, but not every implementation method can account
                        for this.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>

                                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;

    &lt;!-- Force next columns to break to new line --&gt;
    &lt;div class="w-100"&gt;&lt;/div&gt;

    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <p>You may also apply this break at specific breakpoints with our <a
                            href="/docs/4.1/utilities/display/">responsive display utilities</a>.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

                                <!-- Force next columns to break to new line at md breakpoint and up -->
                                <div class="w-100 d-none d-md-block"></div>

                                <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;

    &lt;!-- Force next columns to break to new line at md breakpoint and up --&gt;
    &lt;div class="w-100 d-none d-md-block"&gt;&lt;/div&gt;

    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Reordering</h5>
                </div>
                <div class="card-body">
                    <h5>Order classes</h5>
                    <hr>
                    <p>Use <code class="highlighter-rouge">.order-</code> classes for controlling the <strong>visual
                            order</strong> of your content. These classes are responsive, so you can set the <code
                            class="highlighter-rouge">order</code>
                        by breakpoint (e.g., <code class="highlighter-rouge">.order-1.order-md-2</code>). Includes
                        support for <code class="highlighter-rouge">1</code> through <code
                            class="highlighter-rouge">12</code> across
                        all five grid tiers.
                    </p>
                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    First, but unordered
                                </div>
                                <div class="col order-12">
                                    Second, but last
                                </div>
                                <div class="col order-1">
                                    Third, but first
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;
            First, but unordered
        &lt;/div&gt;
        &lt;div class="col order-12"&gt;
            Second, but last
        &lt;/div&gt;
        &lt;div class="col order-1"&gt;
            Third, but first
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                    <p>There are also responsive <code class="highlighter-rouge">.order-first</code> and <code
                            class="highlighter-rouge">.order-last</code> classes that change the <code
                            class="highlighter-rouge">order</code>
                        of an element by applying
                        <code class="highlighter-rouge">order: -1</code> and <code class="highlighter-rouge">order:
                            13</code> (<code class="highlighter-rouge">order: $columns + 1</code>), respectively. These
                        classes can also
                        be intermixed with the numbered
                        <code class="highlighter-rouge">.order-*</code> classes as needed.</p>

                    <div class="bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col order-last">
                                    First, but last
                                </div>
                                <div class="col">
                                    Second, but unordered
                                </div>
                                <div class="col order-first">
                                    Third, but first
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col order-last"&gt;
            First, but last
        &lt;/div&gt;
        &lt;div class="col"&gt;
            Second, but unordered
        &lt;/div&gt;
        &lt;div class="col order-first"&gt;
            Third, but first
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Offsetting Columns</h5>
                    <hr>
                    <p>You can offset grid columns in two ways: our responsive <code
                            class="highlighter-rouge">.offset-</code> grid classes and our <a
                            href="/docs/4.1/utilities/spacing/">margin utilities</a>. Grid classes are
                        sized to match columns while margins are more useful for quick layouts where the width of the
                        offset is variable.</p>
                    <h5 class="mt-5">Offset classes</h5>
                    <hr>
                    <p>Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes.
                        These classes increase the left margin of a column by <code class="highlighter-rouge">*</code>
                        columns. For
                        example,
                        <code class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code>
                        over four columns.</p>
                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
    &lt;div class="col-md-4 offset-md-4"&gt;.col-md-4 .offset-md-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
    &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-md-6 offset-md-3"&gt;.col-md-6 .offset-md-3&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <p>In addition to column clearing at responsive breakpoints, you may need to reset offsets. See this
                        in action in <a href="/docs/4.1/examples/grid/">the grid example</a>.</p>

                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
                                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6
                                    .offset-md-0
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
                                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5
                                    .offset-md-2 .col-lg-6 .offset-lg-0
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-sm-5 col-md-6"&gt;.col-sm-5 .col-md-6&lt;/div&gt;
    &lt;div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"&gt;.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-sm-6 col-md-5 col-lg-6"&gt;.col-sm-6 .col-md-5 .col-lg-6&lt;/div&gt;
    &lt;div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"&gt;.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>

                    <h5 class="mt-5">Margin utilities</h5>
                    <hr>
                    <p>With the move to flexbox in v4, you can use margin utilities like <code
                            class="highlighter-rouge">.mr-auto</code> to force sibling columns away from one another.
                    </p>

                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-auto mr-auto">.col-auto .mr-auto</div>
                                <div class="col-auto">.col-auto</div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
    &lt;div class="col-md-4 ml-auto"&gt;.col-md-4 .ml-auto&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
    &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row"&gt;
    &lt;div class="col-auto mr-auto"&gt;.col-auto .mr-auto&lt;/div&gt;
    &lt;div class="col-auto"&gt;.col-auto&lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Nesting</h5>
                </div>
                <div class="card-body">
                    <p>To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code>
                        and set of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code
                            class="highlighter-rouge">.col-sm-*</code>
                        column. Nested rows should include a set of columns that add up to 12 or fewer (it is not
                        required that you use all 12 available columns).</p>

                    <div class="bd-example-row">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-9">
                                    Level 1: .col-sm-9
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <pre>
												<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-sm-9"&gt;
        Level 1: .col-sm-9
        &lt;div class="row"&gt;
            &lt;div class="col-8 col-sm-6"&gt;
                Level 2: .col-8 .col-sm-6
            &lt;/div&gt;
            &lt;div class="col-4 col-sm-6"&gt;
                Level 2: .col-4 .col-sm-6
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
						                    </code>
						                </pre>
                    </div>
                    <p>When using Bootstrap’s source Sass files, you have the option of using Sass variables and mixins
                        to create custom, semantic, and responsive page layouts. Our predefined grid classes use these
                        same
                        variables and mixins to provide a whole suite of ready-to-use classes for fast responsive
                        layouts.</p>

                    <h5 class="mt-5">Variables</h5>
                    <hr>
                    <p>Variables and maps determine the number of columns, the gutter width, and the media query point
                        at which to begin floating columns. We use these to generate the predefined grid classes
                        documented above,
                        as well as for the custom mixins listed below.</p>
                    <pre>
                        <code class="language-scss">
                            $grid-columns: 12;
                            $grid-gutter-width: 30px;

                            $grid-breakpoints: (
                                // Extra small screen / phone
                                xs: 0,
                                // Small screen / phone
                                sm: 576px,
                                // Medium screen / tablet
                                md: 768px,
                                // Large screen / desktop
                                lg: 992px,
                                // Extra large screen / wide desktop
                                xl: 1200px
                            );

                            $container-max-widths: (
                                sm: 540px,
                                md: 720px,
                                lg: 960px,
                                xl: 1140px
                            );
                        </code>
                    </pre>

                    <h5 class="mt-5">Mixins</h5>
                    <hr>
                    <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual
                        grid columns.</p>
                    <pre>
                        <code class="language-scss">
                            // Creates a wrapper for a series of columns
{{--                            @include make-row();--}}

                            // Make the element grid-ready (applying everything but the width)
{{--                            @include make-col-ready();--}}
{{--                            @include make-col($size, $columns: $grid-columns);--}}

                            // Get fancy by offsetting, or changing the sort order
{{--                            @include make-col-offset($size, $columns: $grid-columns);--}}
                        </code>
                    </pre>

                    <h5 class="mt-5">Example usage</h5>
                    <hr>
                    <p>You can modify the variables to your own custom values, or just use the mixins with their default
                        values. Here’s an example of using the default settings to create a two-column layout with a gap
                        between.</p>
                    <pre>
                        <code class="language-scss">
                            .example-container {
                                width: 800px;
{{--                                @include make-container();--}}
                            }

                            .example-row {
{{--                                @include make-row();--}}
                            }

                            .example-content-main {
{{--                                @include make-col-ready();--}}

{{--                                @include media-breakpoint-up(sm) {--}}
{{--                                    @include make-col(6);--}}
{{--                                }--}}
{{--                                @include media-breakpoint-up(lg) {--}}
{{--                                    @include make-col(8);--}}
{{--                                }--}}
                            }

                            .example-content-secondary {
{{--                                @include make-col-ready();--}}
{{--                                @include media-breakpoint-up(sm) {--}}
{{--                                    @include make-col(6);--}}
{{--                                }--}}
{{--                                @include media-breakpoint-up(lg) {--}}
{{--                                    @include make-col(4);--}}
{{--                                }--}}
                            }
                        </code>
                    </pre>

                    <div class="bd-example-row">
                        <div class="example-container">
                            <div class="example-row">
                                <div class="example-content-main">Main content</div>
                                <div class="example-content-secondary">Secondary content</div>
                            </div>
                        </div>
                        <pre>
                            <code class="language-markup">
                                &lt;div class="example-container"&gt;
                                    &lt;div class="example-row"&gt;
                                        &lt;div class="example-content-main"&gt;Main content&lt;/div&gt;
                                        &lt;div class="example-content-secondary"&gt;Secondary content&lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Customizing the Grid</h5>
                </div>
                <div class="card-body">
                    <p>Using our built-in grid Sass variables and maps, it’s possible to completely customize the
                        predefined grid classes. Change the number of tiers, the media query dimensions, and the
                        container widths—then
                        recompile.</p>

                    <h5 class="mt-2">Columns and gutters</h5>
                    <hr>
                    <p>The number of grid columns can be modified via Sass variables. <code class="highlighter-rouge">$grid-columns</code>
                        is used to generate the widths (in percent) of each individual column while <code
                            class="highlighter-rouge">$grid-gutter-width</code>
                        allows breakpoint-specific widths that are divided evenly across <code
                            class="highlighter-rouge">padding-left</code> and <code class="highlighter-rouge">padding-right</code>
                        for the column gutters.</p>
                    <pre>
											<code class="language-scss">
$grid-columns: 12 !default;
$grid-gutter-width: 30px !default;
                                            </code>
                                        </pre>

                    <h5 class="mt-5">Grid tiers</h5>
                    <hr>
                    <p>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you
                        wanted just four grid tiers, you’d update the <code
                            class="highlighter-rouge">$grid-breakpoints</code> and
                        <code class="highlighter-rouge">$container-max-widths</code> to something like this:</p>
                    <pre>
											<code class="language-scss">
$grid-breakpoints: (
    xs: 0,
    sm: 480px,
    md: 768px,
    lg: 1024px
);

$container-max-widths: (
    sm: 420px,
    md: 720px,
    lg: 960px
);
                                            </code>
                                        </pre>
                    <p>When making any changes to the Sass variables or maps, you’ll need to save your changes and
                        recompile. Doing so will output a brand new set of predefined grid classes for column widths,
                        offsets, and
                        ordering. Responsive visibility utilities will also be updated to use the custom breakpoints.
                        Make sure to set grid values in <code class="highlighter-rouge">px</code> (not <code
                            class="highlighter-rouge">rem</code>,
                        <code class="highlighter-rouge">em</code>, or <code class="highlighter-rouge">%</code>).</p>
                </div>
            </div>
        </div>
        <!-- [ grid ] end -->
    </div>
@endsection
