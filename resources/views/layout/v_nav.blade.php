<div class="sidebar">
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

      <!-- Data -->
      @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin' or auth()->user()->role=='Penghimpun')
      <li class="nav-item"><a href="#" class="nav-link">
    <i class="nav-icon fas fa-receipt"></i>
    <p>
        Transaksi
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    <ul class="nav nav-treeview">
    @if(auth()->user()->role=='Penghimpun' or auth()->user()->role=='Admin')
    <li class="nav-item">
      <a href="/datatunai" class="nav-link">
        <i class="nav-icon fas fa-money-bill"></i>
        <p>
          Transaksi Tunai
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
    <li class="nav-item">
      <a href="/datanontunai" class="nav-link">
        <i class="nav-icon fas fa-money-check"></i>
        <p>
          Transaksi Non Tunai
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
  </ul>
</li>
@endif
@if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
      <li class="nav-item menu-open">
    <li class="nav-item">
      <a href="/datamustahik" class="nav-link">
        <i class="nav-icon fas fa-universal-access"></i>
        <p>
          Data Mustahik
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin' or auth()->user()->role=='Penghimpun')
    <li class="nav-item">
      <a href="/datamuzakki" class="nav-link">
        <i class="nav-icon fas fa-house-user"></i>
        <p>
          Data Muzakki
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    @if(auth()->user()->role=='Admin' or auth()->user()->role=='Supervisor')
    <li class="nav-item">
      <a href="/datauser" class="nav-link">
        <i class="nav-icon fas fa-address-book"></i>
        <p>
          Data User
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin')
    <li class="nav-item">
      <a href="/dataprogram" class="nav-link">
        <i class="nav-icon fas fa-clipboard-list"></i>
        <p>
          Data Program
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    @if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin' or auth()->user()->role=='Supervisor')
    <li class="nav-item">
      <a href="/datapenyaluran" class="nav-link">
        <i class="nav-icon fas fa-handshake"></i>      
        <p>
          Data Penyaluran
          <i class="right fas"></i>
        </p>
      </a>
    </li>
    @endif
    
    

    
</li>
</li>
    <!-- Akhir Settings -->
  </ul>
</nav>
</div>