@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Page visits</h2>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-bottom" scope="col">Page name</th>
                                <th class="border-bottom" scope="col">Page Views</th>
                                <th class="border-bottom" scope="col">Page Value</th>
                                <th class="border-bottom" scope="col">Bounce rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-gray-900" scope="row">
                                    /demo/admin/index.html
                                </th>
                                <td class="fw-bolder text-gray-500">
                                    3,225
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    $20
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    <div class="d-flex">
                                        <svg class="icon icon-xs text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                        42,55%
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Page visits</h2>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-bottom" scope="col">Page name</th>
                                <th class="border-bottom" scope="col">Page Views</th>
                                <th class="border-bottom" scope="col">Page Value</th>
                                <th class="border-bottom" scope="col">Bounce rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-gray-900" scope="row">
                                    /demo/admin/index.html
                                </th>
                                <td class="fw-bolder text-gray-500">
                                    3,225
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    $20
                                </td>
                                <td class="fw-bolder text-gray-500">
                                    <div class="d-flex">
                                        <svg class="icon icon-xs text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                        42,55%
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h2 class="fs-5 fw-bold mb-0">Total Orders</h2>
            </div>
            <div class="card-body">
                <p class="mb-0">
                    <span class="h2 font-weight-bold mb-0">10</span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection