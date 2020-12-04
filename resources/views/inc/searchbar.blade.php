<div class="search-box" id="searchbar"> 
    <form id="search_form" action="{{ route('search') }}" method="get">
        <input class="search-text" type="text" placeholder="Type to Search" name="search" value="{{ request()->input('search')}}"> 
            <a class="search-btn" href="javascript:{}" onclick="document.getElementById('search_form').submit(); return false;"> 
                <i class="fa fa-search"
                style="font-size: 18px;"> 
                </i> 
            </a>
    </form>
</div> 