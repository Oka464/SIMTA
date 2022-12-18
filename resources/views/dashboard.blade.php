@extends('admin.ds')
@section('pagetitle')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
@endsection
@section('profile')
    <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
@endsection

@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <!-- start Bimbingan TA -->
      <li class="nav-heading">Bimbingan TA</li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-journal-text"></i>
          <span>Mengajukan Proposal</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/upload">
          <i class="bi bi-layer-forward"></i>
          <span>Upload Revisi Proposal TA</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-calendar-week"></i>
          <span>Jadwal Sidang</span>
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link collapsed" href="/dashboard">
        <i class="bi bi-layer-forward"></i>
        <span>Upload Revisi TA</span>
      </a>
    </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-brush"></i>
          <span>Nilai TA</span>
        </a>
      </li>
      <!-- End Bimbingan TA -->
      <!-- start tracking ta -->
      <li class="nav-heading">Tracking TA</li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-signpost-split-fill"></i>
          <span>Tracking TA</span>
        </a>
      </li>
      <!-- end tracking TA -->
      <!-- start upload berkas -->
      <li class="nav-heading">Upload Berkas</li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-file-earmark-text"></i>
          <span>Upload Bebas Lab</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-file-earmark-check"></i>
          <span>Upload Lembar Pengesahan</span>
        </a>
      </li>
      <!-- end upload berkas -->
      <!-- Start Verifikasi -->
      <!-- <li class="nav-heading">Upload Berkas</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-menu-button-wide"></i>
          <span>Verifikasi Bebas Lab</span>
        </a>
      </li> -->
      <!-- End Register Page Nav -->

     
    </ul>
@endsection

