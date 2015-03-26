@extends('layout.admin')

@section('css')

@stop

@section('main_content')
    <div class="full-container">
        <div class="row">
            <div class="one-half column">
                <div class="table-responsive-vertical shadow-z-1">
                    <!-- Table starts here -->
                    <table id="table" class="table table-striped table-hover table-mc-light-blue">
                        <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-title="ID">3934</td>
                            <td data-title="Name">Rick James</td>
                            <td data-title="Link">$20.10</td>
                            <td data-title="Status">March 16, 2015 9:58:52 pm</td>
                        </tr>
                        <tr>
                            <td data-title="ID">2</td>
                            <td data-title="Name">Material Design Tiles</td>
                            <td data-title="Link"></td>
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
            <div class="one-half column">
                <div class="table-responsive-vertical shadow-z-1">
                    <!-- Table starts here -->
                    <table id="table" class="table table-hover table-mc-light-blue">
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
    </div>
@stop

@section('javascript')

@stop