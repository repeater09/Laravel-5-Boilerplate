@extends('layout.main')

@section('css')

@stop

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="sixteen columns">
                <h1>Documentation</h1>
            </div>
        </div>
        <hr>
        <section id="front-end">
            <div class="row">
                <div class="sixteen columns">
                    <h2>Getting Started</h2>
                    <p>Please review our <a href="https://github.com/repeater09/Laravel-5-Boilerplate" target="_blank">Github page</a> to see how to get started with this project.
                        The project is very simple to get going with and uses all the updated technologies available.</p>
                    <p>Below is basic documentation for the Front-end framework and the Back-end framework used.
                        Also detailed documentation for custom styles are listed.</p>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h2>Skeleton - Front-end framework</h2>
                    <p>I chose <a href="https://getskeleton.com" target="_blank">Skeleton</a> for this project because it gives a lot of flexibility to create custom styles and easily integrate it to any project.
                    While other frameworks like Bootstrap and Foundation do have just the grid system available.
                        The confusion of all their other plugins and features tend to get in the way of not only learning how to create styles yourself but, also they lack any custom look and feel without heavy customization. </p>
                </div>
            </div>
            <div class="row">
                <div class="one-third column">
                    <img src="img/resources.PNG" alt="Resources folder structure" height="269" width="285" class="scale-with-grid">
                </div>
                <div class="two-thirds column">
                    <h3>Folder Structure</h3>
                    <p>The folder structure does follow the recommendation based on Laravel's framework (which is to have all styles, images and JS in the <code>public</code> folder.
                        However, there are some differences.</p>
                    <h4>LESS for CSS</h4>
                    <p>The project uses <a href="http://lesscss.org/">LESS</a> to create CSS. All LESS files are located <code>resources/assets/less</code>.
                        This project uses LESS to easily manage our CSS files.
                        The main LESS file is the <code>style.less</code> which manages all the LESS files with the <code>@import</code> CSS at-rule.
                        The LESS file is then concatenated and minified to <code>public/css/style.css</code> which is called from the main blade template file.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Colors</h5>
                    <p>the <code>color.less</code> file contains all the basic colors for your project.
                        The main colors are: blue, black, red, yellow, green and grey.
                        You can easily add and edit these colors.
                        Editing the colors will effect most styles that contain colors.
                        Such as, alerts, buttons and links.</p>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Alerts</h5>
                    <p>Alerts are based mostly on the look and feel of Twitter's Bootstrap alert classes. The alerts primary focuses are: Errors, Informational, Success and Warnings.
                        Alerts will also expand the entire length of the parent column.
                        Also includes through JS is the ability to close out the alert by simply including the <code>span</code> class: <code>&lt;span class="icon-x alert-close alert-close-CHOSENALERT"&gt;&lt;/span&gt;</code></p>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <div class="alert alert-warning">
                        <span class="icon-x alert-close alert-close-warning"></span>
                        Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie.
                    </div>
                    <div class="alert alert-success">
                        <span class="icon-x alert-close alert-close-success"></span>
                        this is your alert
                    </div>
                    <div class="alert alert-information">
                        <span class="icon-x alert-close alert-close-information"></span>
                        Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie.
                    </div>
                    <div class="alert alert-error">
                        <span class="icon-x alert-close alert-close-error"></span>
                        this is your alert
                    </div>
                    <pre>
                        <code>&lt;div class=&quot;alert alert-warning&quot;&gt;<br>&lt;span class=&quot;icon-x alert-close alert-close-warning&quot;&gt;&lt;/span&gt;<br>Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie.<br>&lt;/div&gt;<br>&lt;div class=&quot;alert alert-success&quot;&gt;<br>&lt;span class=&quot;icon-x alert-close alert-close-success&quot;&gt;&lt;/span&gt;<br>this is your alert<br>&lt;/div&gt;<br>&lt;div class=&quot;alert alert-information&quot;&gt;<br>&lt;span class=&quot;icon-x alert-close alert-close-information&quot;&gt;&lt;/span&gt;<br>Pellentesque aliquet massa vel dolor semper laoreet. Ut interdum quis arcu eget molestie.<br>&lt;/div&gt;<br>&lt;div class=&quot;alert alert-error&quot;&gt;<br>&lt;span class=&quot;icon-x alert-close alert-close-error&quot;&gt;&lt;/span&gt;<br>this is your alert<br>&lt;/div&gt;
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Buttons</h5>
                    <p>Buttons styles are created to easily show link importance and to create call-to-actions that stand out.
                        We chose a basic look and feel for the buttons that can be easily edited in the <code>resources/assets/custom/button.less</code> file.
                        Along with the basic outlook of the buttons we also provide outlined buttons for a more flat modern look. </p>
                </div>
            </div>
            <div class="row">
                <div class="one-half column">
                    <div class="add-bottom"><a href="#" class="btn btn-default">Default Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-information">Information Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-success">Success Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-error">Error Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-warning">Warning Button</a></div>
                </div>
                <div class="one-half column">
                    <div class="add-bottom"><a href="#" class="btn btn-outline-default">Outline Default Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-outline-information">Outline Information Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-outline-success">Outline Success Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-outline-error">Outline Error Button</a></div>
                    <div class="add-bottom"><a href="#" class="btn btn-outline-warning">Outline Warning Button</a></div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <pre>
                        <code> &lt;a href="#" class="btn btn-default"&gt;Default Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-information"&gt;Information Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-success"&gt;Success Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-error"&gt;Error Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-warning"&gt;Warning Button&lt;/a&gt;<br/><br/> &lt;a href="#" class="btn btn-outline-default"&gt;Outline Default Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-outline-information"&gt;Outline Information Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-outline-success"&gt;Outline Success Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-outline-error"&gt;Outline Error Button&lt;/a&gt;<br/> &lt;a href="#" class="btn btn-outline-warning"&gt;Outline Warning Button&lt;/a&gt;
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Icons</h5>
                    <p>Icons are provided as a separate stylesheet instead of a CDN. The collection contains over 800 icons. To view the icons and to see the class names needed in order to call them navigate to <code>public/fonts.zip</code>, unzip the file and then pull up the <code>icon-reference.html</code> page to view all the icons.
                    In order to use the icons correctly you will need to add <code>icon-ICONNAME</code> to each class.
                    <div class="alert alert-information">
                        The <code>icon</code> class will need to be added to each icon you display. This fixes the vertical alignment for icons that are used inside of tags that have text along with it.
                    </div>
                    <p>We also provide simple styling for icons that can increase the size of icons for better handling.</p>

                </div>
            </div>
            <div class="row">
                <div class="one-third column">
                    <span class="icon-calendar-1 icon icon-xlarge"> x-large icon</span><br />
                    <span class="icon-calendar-1 icon icon-large"> large icon</span><br />
                    <span class="icon-calendar-1 icon icon-medium"> medium</span><br />
                    <span class="icon-calendar-1 icon"> normal size</span><br />
                    <span class="icon-calendar-1 icon icon-small"> small</span><br />
                </div>
                <div class="two-thirds column">
                    <pre>
                        <code> &lt;span class="icon-calendar-1 icon icon-xlarge"&gt; x-large icon&lt;/span&gt;<br/> &lt;span class="icon-calendar-1 icon icon-large"&gt; large icon&lt;/span&gt;<br/> &lt;span class="icon-calendar-1 icon icon-medium"&gt; medium&lt;/span&gt;<br/> &lt;span class="icon-calendar-1 icon"&gt; normal size&lt;/span&gt;<br/> &lt;span class="icon-calendar-1 icon icon-small"&gt; small&lt;/span&gt;
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Navigation</h5>
                    <h6>Sticky Header</h6>
                    <p>The navigation features the ability to be flexible with where and how you place you navigation.
                        The navigation has almost no styling so you can style however you would like.
                        With the help of Javascript you also have the ability to have a sticky header (sticks to the top of the web page) from anywhere on the screen.
                        By simply adding <code>id="sticker"</code> to your parent navigation div you can have your navigation stick to the top of the web page when ever the window scrolls past that point.</p>
                    <div class="alert alert-information">
                        Also, be aware since this is called by jQuery you need to make sure the correct function is called via jQuery.
                        By default, it's added in the main template file of this project right before the <code>&lt;/body&gt;</code> tag.
                    </div>
                    <h6>Responsive Navigation</h6>
                    <p>Thanks to <a href="http://www.berriart.com/sidr/" tagret="_blank">SIDR</a>, making responsive navigation really simple.
                        By default the included navigation is responsive. This was custom created to account for skeleton front-end framework breakpoints and used with custom hidden breakpoints. </p>
                    <p>The following code shows when the "hamburger" icon is called. Note the <code>&lt;div class="hidden-desktop"&gt;&lt;/div&gt;</code> class is called to ensure that the icon does not show when the desktop view is in play.</p>
                    <pre>
                        <code>&lt;div id="hamburger" class="hidden-desktop"&gt;<br/> &lt;a id="responsive-menu-button" href="#sidr"&gt;&lt;span class="icon-three-bars icon-xlarge"&gt;&lt;/span&gt;&lt;/a&gt;<br/> &lt;/div&gt;</code>
                    </pre>
                    <p>By default sidr is automatically called via jQuery.
                        However, you have to make sure that the sidr call to the id is also called. Make sure the following snippet is added right before the end of the <code>&lt;/body&gt;</code> tag.</p>
                    <pre>
                        <code> $('#responsive-menu-button').sidr({<br/> name: 'sidr-main',<br/> source: '#navigation'<br/>});&gt;</code>
                    </pre>
                    <div class="alert alert-information">
                        To see the navigation in action just resize your browser window. Once the desktop breakpoint is reached the project will then switch to mobile view and show the responsive menu.
                    </div>
                    <h6>Drop-down Menu</h6>
                    <p>The credit for the drop-down menu goes to this <a href="http://codepen.io/wbeeftink/pen/otJBq" target="_blank">codepen</a>. This is a very simple hover effect to show drop-down menus for your navigation.
                        The drop-down menu can be edited in the <code>resources/assets/less/custom/nav.less</code> file. By default this project has drop-down menus enabled. To see it in action just hover over the Drop-down Link tag.</p>
                    <div class="alert alert-information">
                        Since this isn't my code I decided not to share the code snippets here. Please visit the codepen and support the creator of this drop-down menu.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Responsive tables</h5>
                    <p>The credit for the table design goes to the person that created this <a href="http://codepen.io/zavoloklom/pen/IGkDz" target="_blank">codepen</a>.
                        This design allows responsive tables that can be used to display information in a table format perfect for administrative panels.
                        There are two main different types of table design. First there is just a regular table and then there is a striped version.</p>
                    <div class="alert alert-information">
                        Since this isn't my code I decided not to share the code snippets here. Please visit the codepen and support the creator of these tables.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h6>Regular Responsive Table</h6>
                    <div class="table-responsive-vertical shadow-z-1">
                        <!-- Table starts here -->
                        <table id="table" class="table table-hover table-mc-light-green">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-title="ID">1</td>
                                <td data-title="Name">Material Design Sidebar</td>
                                <td data-title="Link"><a href="http://codepen.io/zavoloklom/pen/dIgco" target="_blank">Link</a></td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">2</td>
                                <td data-title="Name">Material Design Tiles</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/wtApI" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">3</td>
                                <td data-title="Name">Material Design Animation Timing</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/Jbrho" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">4</td>
                                <td data-title="Name">Material Design Iconic Font</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/uqCsB" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">5</td>
                                <td data-title="Name">Material Design Typography</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/IkaFL" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">6</td>
                                <td data-title="Name">Material Design Buttons</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/Gubja" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            <tr>
                                <td data-title="ID">7</td>
                                <td data-title="Name">Material Design Form Elements</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/yaozl" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            <tr>
                                <td data-title="ID">8</td>
                                <td data-title="Name">Material Design Email Template</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/qEVqzx" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h6>Striped Responsive Table</h6>
                    <div class="table-responsive-vertical shadow-z-1">
                        <!-- Table starts here -->
                        <table id="table" class="table table-striped table-hover table-mc-light-blue">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-title="ID">1</td>
                                <td data-title="Name">Material Design Sidebar</td>
                                <td data-title="Link"><a href="http://codepen.io/zavoloklom/pen/dIgco" target="_blank">Link</a></td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">2</td>
                                <td data-title="Name">Material Design Tiles</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/wtApI" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">3</td>
                                <td data-title="Name">Material Design Animation Timing</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/Jbrho" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">4</td>
                                <td data-title="Name">Material Design Iconic Font</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/uqCsB" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">5</td>
                                <td data-title="Name">Material Design Typography</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/IkaFL" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">Completed</td>
                            </tr>
                            <tr>
                                <td data-title="ID">6</td>
                                <td data-title="Name">Material Design Buttons</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/Gubja" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            <tr>
                                <td data-title="ID">7</td>
                                <td data-title="Name">Material Design Form Elements</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/yaozl" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            <tr>
                                <td data-title="ID">8</td>
                                <td data-title="Name">Material Design Email Template</td>
                                <td data-title="Link">
                                    <a href="http://codepen.io/zavoloklom/pen/qEVqzx" target="_blank">Link</a>
                                </td>
                                <td data-title="Status">In progress</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Tabs</h5>
                    <p>Having tabs on your website provides ways to show information in a more "dynamic" way.
                        Allowing visitors to choose what they want to view in an easy to use tab format makes it more engaging and easier to view information that they feel is important</p>
                    <pre>
                        <code>&lt;div class="tab"&gt;<br/> &lt;ul class="tabs"&gt;<br/> &lt;li&gt;&lt;a href="#"&gt;Meow&lt;/a&gt;&lt;/li&gt;<br/> &lt;li&gt;&lt;a href="#"&gt;I got a friend&lt;/a&gt;&lt;/li&gt;<br/> &lt;li&gt;&lt;a href="#"&gt;I don't know what I am doing with my life.&lt;/a&gt;&lt;/li&gt;<br/> &lt;/ul&gt;<br/> &lt;div class="tab_content"&gt;<br/> &lt;div class="tabs_item"&gt;<br/> &lt;img src="http://cdn.playbuzz.com/cdn/0079c830-3406-4c05-a5c1-bc43e8f01479/7dd84d70-768b-492b-88f7-a6c70f2db2e9.jpg"&gt;<br/> &lt;h4&gt;This is a Regular cat.&lt;/h4&gt;<br/> &lt;p&gt;Consectetur adipisicing elit. Neque, repellat facilis totam ab eos distinctio sint atque maiores! Dignissimos, molestiae, rem accusantium iure vitae voluptatum voluptas repudiandae deserunt dolore quis! Quisquam mollitia eius sed.&lt;/p&gt;<br/> &lt;/div&gt;<br/> &lt;div class="tabs_item"&gt;<br/> &lt;img src="http://www.petsworld.in/blog/wp-content/uploads/2014/09/cute-kittens.jpg"&gt;<br/> &lt;h4&gt;These cats are best friends&lt;/h4&gt;<br/> &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?&lt;/p&gt;<br/> &lt;/div&gt;<br/> &lt;div class="tabs_item"&gt;<br/> &lt;img src="http://img.thesun.co.uk/aidemitlum/archive/01604/SNN2035CAT-620_1604704a.jpg"&gt;<br/> &lt;h4&gt;This cat has mad thoughts about life in general.&lt;/h4&gt;<br/> &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.&lt;/p&gt;<br/> &lt;/div&gt;<br/> &lt;/div&gt;<br/> &lt;/div&gt;
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <div class="tab">
                        <ul class="tabs">
                            <li><a href="#">Meow</a></li>
                            <li><a href="#">I got a friend</a></li>
                            <li><a href="#">I don't know what I am doing with my life.</a></li>
                        </ul>
                        <div class="tab_content">
                            <div class="tabs_item">
                                <img src="http://cdn.playbuzz.com/cdn/0079c830-3406-4c05-a5c1-bc43e8f01479/7dd84d70-768b-492b-88f7-a6c70f2db2e9.jpg">
                                <h4>This is a Regular cat.</h4>
                                <p>Consectetur adipisicing elit. Neque, repellat facilis totam ab eos distinctio sint atque maiores! Dignissimos, molestiae, rem accusantium iure vitae voluptatum voluptas repudiandae deserunt dolore quis! Quisquam mollitia eius sed.</p>
                            </div>
                            <div class="tabs_item">
                                <img src="http://www.petsworld.in/blog/wp-content/uploads/2014/09/cute-kittens.jpg">
                                <h4>These cats are best friends</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>
                            </div>
                            <div class="tabs_item">
                                <img src="http://img.thesun.co.uk/aidemitlum/archive/01604/SNN2035CAT-620_1604704a.jpg">
                                <h4>This cat has mad thoughts about life in general.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>Custom</h5>
                    <p>There are plenty of custom styles that I have provided to make designing and developing easier. I cannot showcase each individual style but I do encourage sniffing through the source code and seeing what you can find.</p>
                    <h6>Utilities</h6>
                    <p>By default Skeleton does provide some utilities for designing. I have added a few more to make it even easier.</p>
                    <pre>
                        <code>.remove-bottom{<br/> margin-bottom: 0 !important;<br/>}<br/><br/>.separator-small{<br/> margin-bottom: 30px;<br/>}<br/><br/>.separator{<br/> margin-bottom: 60px;<br/>}<br/><br/>.separator-large{<br/> margin-bottom: 90px;<br/>}<br/><br/>.center{<br/> text-align: center;<br/>}<br/>p.lead{<br/> font-size: 120%;<br/>}<br/><br/>.add-bottom{<br/> margin-bottom: 20px;<br/>}</code>
                    </pre>
                    <p>All of these just make it easier to place either text or images inside of divs. Also, it will create some white space between sections if you do need that. </p>
                    <h6>Decorations</h6>
                    <p>The main purpose of this project was to leave out as much fluff as I could. However, one style that I have seen a lot lately is the use of tiles. I created one based on Google plus's tile design.</p>
                </div>
            </div>
            <div class="row">
                <div class="one-third column">
                    <div class="tile">
                        <h5>This is a tile</h5>
                        <p>This is information that goes into a tile. As you can see this can draw users and showcase important snippets.
                            You should def include a call to action here.</p>
                        <a href="#" class="btn btn-block btn-outline-default">Call to Action</a>
                    </div>
                </div>
                <div class="two-thirds column">
                    <pre>
                        <code>&lt;div class="tile"&gt;<br/> &lt;h5&gt;This is a tile&lt;/h5&gt;<br/> &lt;p&gt;This is information that goes into a tile. As you can see this can draw users and showcase important snippets.<br/> You should def include a call to action here.&lt;/p&gt;<br/> &lt;a href="#" class="btn btn-block btn-outline-default"&gt;Call to Action&lt;/a&gt;<br/> &lt;/div&gt;
                        </code>
                    </pre>
                </div>
            </div>
        </section>
        <section class="back-end">
            <div class="row">
                <div class="sixteen columns">
                    <h2>Laravel - Back-end framework</h2>
                    <p>I chose <a href="http://laravel.com/" target="_blank">Laravel</a> for this project because it's very easy to use and provides simple ways to solve common but sometimes complex problems.
                        I honestly have not done to much that goes outside the realm of Laravel to really showcase. However, there are some points to be made that are not in the <strong>Getting started</strong> section</p>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <h5>File Structure and Template</h5>
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="one-third column">
                    <img src="img/view.png" alt="View folder structure" height="269" width="285" class="scale-with-grid">
                </div>
                <div class="two-thirds column">
                    <p>Like the front-end framework the back-end is easily structure and manageable.
                        The image shows where the front-end pages are stored that are called by the back-end template engine blade.
                        This is pre-built inside laravel however, there are some things to show that may help development. </p>
                    <p>The structure of the views have one main template file in the <code>resources/assets/views/layout</code> folder.
                        Here is where the base of the html is structured to provide a template for all your other pages. As you can see ther eis one provided for both the website itself as well as the admin side.
                        These are separated out but by default share most of the same styles.
                        But, separating them out like this provides an easier way to make them different if that what's you chose.</p>
                    <p>Inside the <code>main.blade.php</code> file there are somethings that I have created that make the process more manageable.
                        If you look in the head of the page you will see <code>@yield('css')</code> this code will actually pull custom page css rules into the main part of your project.
                        So, if a particular page has unique styles you can add them to that page only and then they will be called. This is useful for things like tables (they are included by default in <code>style.less</code> for example purposes). We also include a yield for javascript that is called right at the jQuery document call.</p>
                </div>
            </div>
        </section>
    </div>
@stop

@section('javascript')

@stop