@extends('layouts.app')

@section('content')

     {{-- <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mentor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                </ul>
                <div class="d-flex user-logged">
                    <a href="#">
                        Halo, Beatrice!
                        <img src="/images/user_photo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </nav> --}}

    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
                <table class="table">
                    <tbody>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/images/item_bootcamp.png" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong>Waiting for Payment</strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/images/item_bootcamp.png" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong><span class="text-green">Payment Success</span></strong>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <td width="18%">
                                <img src="/images/item_bootcamp.png" height="120" alt=" ">
                            </td>
                            <td>
                                <p class=" mb-2 ">
                                    <strong>Gila Belajar</strong>
                                </p>
                                <p>
                                    September 24, 2021
                                </p>
                            </td>
                            <td>
                                <strong>$280,000</strong>
                            </td>
                            <td>
                                <strong><span class="text-red ">Canceled</span></strong>
                            </td>
                            <td>
                                <a href="# " class="btn btn-primary ">
                                    Get Invoice
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
@endsection