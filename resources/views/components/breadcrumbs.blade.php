@if(Breadcrumbs::has())
    <div class="md:flex justify-between items-center">
        <ul class="breadcrumb tracking-[0.5px] mb-0 inline-block mt-1 md:mt-0">
            @foreach (BreadcrumbsRoute::current() as $breadcrumb)
                @if($breadcrumb->url && ! $loop->last)
                    <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 text-slate-400 dark:text-white/60 hover:text-slate-900 dark:hover:text-white"><a href="{{$breadcrumb->url}}">{{$breadcrumb->title}}</a></li>
                @else
                    <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 text-slate-900 dark:text-white" aria-current="page">{{$breadcrumb->title}}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif