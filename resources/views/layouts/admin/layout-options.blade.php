<form action = "{{ route('admin.update_layouts') }}" method = "POST">
@csrf
@method('PATCH')         

<div class="header_index ui-theme-settings">
<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
<i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
</button>
<div class="theme-settings__inner">
<div class="scrollbar-container">
                         
<div class="theme-settings__options-wrapper">
<div class="position_fixed">
<button class="btn_dachboard" type="submit">SAVE</button>
</div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>

<!--<h3 class="themeoptions-heading">D'luxxis Layout Options</h3>
<div class="p-3">
<ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->

<!--<li class="list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-3">
<div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
<div class="switch-animate switch-on">
<input name="sidebar_position" value="absolute" type="checkbox" checked data-toggle="toggle" data-onstyle="success">
</div>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Fixed Sidebar
</div>
<div class="widget-subheading">Makes the sidebar left fixed, always visible!
</div>
</div>
</div>
</div>
</li>-->

                                <!-- <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
</ul>
</div>-->
<h3 class="themeoptions-heading textblod">D'luxxis Layout Options</h3>
<h3 class="themeoptions-heading">
<div>
Header Options
</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
Restore Default
</button>
</h3>






<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Choose Color Scheme
</h5>
<div class="theme-settings-swatches">

<label for="bg-primary" class="swatch-holder bg-primary switch-header-cs-class @if(Auth::user()->header=='bg-primary header-text-light')
active
@else
@endif" data-class="bg-primary header-text-light CHECKED">
<input style="display:none" id="bg-primary" name="header" type="radio" value="bg-primary header-text-light" @if(Auth::user()->header=='bg-primary header-text-light')
CHECKED
@else
@endif>
</label>



<label for="bg-secondary" class="swatch-holder bg-secondary switch-header-cs-class @if(Auth::user()->header=='bg-secondary header-text-light')
active
@else
@endif" data-class="bg-secondary header-text-light">
<input style="display:none" id="bg-secondary" name="header" type="radio" value="bg-secondary header-text-light" @if(Auth::user()->header=='bg-secondary header-text-light')
CHECKED
@else
@endif>
</label>




<label for="bg-success" class="swatch-holder bg-success switch-header-cs-class @if(Auth::user()->header=='bg-success header-text-light')
active
@else
@endif" data-class="bg-success header-text-light">
<input style="display:none" id="bg-success" name="header" type="radio" value="bg-success header-text-light" @if(Auth::user()->header=='bg-success header-text-light')
CHECKED
@else
@endif>
</label>




<label for="bg-info" class="swatch-holder bg-info switch-header-cs-class @if(Auth::user()->header=='bg-info header-text-dark')
active
@else
@endif" data-class="bg-info header-text-dark">
<input style="display:none" id="bg-info" name="header" type="radio" value="bg-info header-text-dark" @if(Auth::user()->header=='bg-info header-text-dark')
CHECKED
@else
@endif>
</label>





<label for="bg-warning" class="swatch-holder bg-warning switch-header-cs-class @if(Auth::user()->header=='bg-warning header-text-dark')
active
@else
@endif" data-class="bg-warning header-text-dark">
<input style="display:none" id="bg-warning" name="header" type="radio" value="bg-warning header-text-dark" @if(Auth::user()->header=='bg-warning header-text-dark')
CHECKED
@else
@endif>
</label>





<label for="bg-danger" class="swatch-holder bg-danger switch-header-cs-class @if(Auth::user()->header=='bg-danger header-text-light')
active
@else
@endif" data-class="bg-danger header-text-light">
<input style="display:none" id="bg-danger" name="header" type="radio" value="bg-danger header-text-light" @if(Auth::user()->header=='bg-danger header-text-light')
CHECKED
@else
@endif>
</label>





<label for="bg-light" class="border_gris swatch-holder bg-light switch-header-cs-class @if(Auth::user()->header=='bg-light header-text-dark')
active
@else
@endif" data-class="bg-light header-text-dark">
<input style="display:none" id="bg-light" name="header" type="radio" value="bg-light header-text-dark" @if(Auth::user()->header=='bg-light header-text-dark')
CHECKED
@else
@endif>
</label>





<label for="bg-dark" class="swatch-holder bg-dark switch-header-cs-class @if(Auth::user()->header=='bg-dark header-text-light')
active
@else
@endif" data-class="bg-dark header-text-light">
<input style="display:none" id="bg-dark" name="header" type="radio" value="bg-dark header-text-light" @if(Auth::user()->header=='bg-dark header-text-light')
CHECKED
@else
@endif>
</label>





<label for="bg-focus" class="swatch-holder bg-focus switch-header-cs-class @if(Auth::user()->header=='bg-focus header-text-light')
active
@else
@endif" data-class="bg-focus header-text-light">
<input style="display:none" id="bg-focus" name="header" type="radio" value="bg-focus header-text-light" @if(Auth::user()->header=='bg-focus header-text-light')
CHECKED
@else
@endif>
</label>





<label for="bg-alternate" class="swatch-holder bg-alternate switch-header-cs-class @if(Auth::user()->header=='bg-alternate header-text-light')
active
@else
@endif" data-class="bg-alternate header-text-light">
<input style="display:none" id="bg-alternate" name="header" type="radio" value="bg-alternate header-text-light" @if(Auth::user()->header=='bg-alternate header-text-light')
CHECKED
@else
@endif>
</label>



<div class="divider">
</div>
                                     <!--   <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>-->
                                    </div>
                                </li>
                            </ul>
                        </div>

                    






<h3 class="themeoptions-heading">
<div>Body Options</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
Restore Default
</button>
</h3>


<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Choose Color Scheme
</h5>

<style>
.bg-light-b{background-color:#ffffff;}
.bg-light-bl{background-color:#f1f1f1;}
</style>

<div class="theme-settings-swatches">
<label for="body-bg-primary" class="border_gris swatch-holder bg-light-b switch-body-cs-class @if(Auth::user()->body=='bg-light-b body-text-light')
active
@else
@endif" data-class="bg-light-b body-text-light">
<input style="display:none" id="body-bg-primary" name="body" type="radio" value="bg-light-b body-text-light" @if(Auth::user()->body=='bg-light-b body-text-light')
CHECKED
@else
@endif>
</label>


<label for="body-bg-primary2" class="border_gris swatch-holder bg-light-bl switch-body-cs-class @if(Auth::user()->body=='bg-light-bl body-text-light')
active
@else
@endif" data-class="bg-light-bl body-text-light">
<input style="display:none" id="body-bg-primary2" name="body" type="radio" value="bg-light-bl body-text-light" @if(Auth::user()->body=='bg-light-bl body-text-light')
CHECKED
@else
@endif>
</label>


</div>

</li>
</ul>
</div>






<h3 class="themeoptions-heading">
<div>Sidebar Options</div>
<button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
Restore Default
</button>
</h3>

<div class="p-3">
<ul class="list-group">
<li class="list-group-item">
<h5 class="pb-2">Choose Color Scheme
</h5>
<div class="theme-settings-swatches">

<label for="sidebar-bg-primary" class="swatch-holder bg-primary switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-primary sidebar-text-light')
active
@else
@endif" data-class="bg-primary sidebar-text-light">
<input style="display:none" id="sidebar-bg-primary" name="sidebar" type="radio" value="bg-primary sidebar-text-light" @if(Auth::user()->sidebar=='bg-primary sidebar-text-light')
CHECKED
@else
@endif>
</label>





<label for="sidebar-bg-secondary" class="swatch-holder bg-secondary switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-secondary sidebar-text-light')
active
@else
@endif" data-class="bg-secondary sidebar-text-light">
<input style="display:none" id="sidebar-bg-secondary" name="sidebar" type="radio" value="bg-secondary sidebar-text-light" @if(Auth::user()->sidebar=='bg-secondary sidebar-text-light')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-success" class="swatch-holder bg-success switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-success sidebar-text-dark')
active
@else
@endif" data-class="bg-success sidebar-text-dark">
<input style="display:none" id="sidebar-bg-success" name="sidebar" type="radio" value="bg-success sidebar-text-dark" @if(Auth::user()->sidebar=='bg-success sidebar-text-dark')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-info" class="swatch-holder bg-info switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-info sidebar-text-dark')
active
@else
@endif" data-class="bg-info sidebar-text-dark">
<input style="display:none" id="sidebar-bg-info" name="sidebar" type="radio" value="bg-info sidebar-text-dark" @if(Auth::user()->sidebar=='bg-info sidebar-text-dark')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-warning" class="swatch-holder bg-warning switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-warning sidebar-text-dark')
active
@else
@endif" data-class="bg-warning sidebar-text-dark">
<input style="display:none" id="sidebar-bg-warning" name="sidebar" type="radio" value="bg-warning sidebar-text-dark" @if(Auth::user()->sidebar=='bg-warning sidebar-text-dark')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-danger" class="swatch-holder bg-danger switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-danger sidebar-text-light')
active
@else
@endif" data-class="bg-danger sidebar-text-light">
<input style="display:none" id="sidebar-bg-danger" name="sidebar" type="radio" value="bg-danger sidebar-text-light" @if(Auth::user()->sidebar=='bg-danger sidebar-text-light')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-light" class="border_gris swatch-holder bg-light switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-light sidebar-text-dark')
active
@else
@endif" data-class="bg-light sidebar-text-dark">
<input style="display:none" id="sidebar-bg-light" name="sidebar" type="radio" value="bg-light sidebar-text-dark" @if(Auth::user()->sidebar=='bg-light sidebar-text-dark')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-dark" class="swatch-holder bg-dark switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-dark sidebar-text-light')
active
@else
@endif" data-class="bg-dark sidebar-text-light">
<input style="display:none" id="sidebar-bg-dark" name="sidebar" type="radio" value="bg-dark sidebar-text-light" @if(Auth::user()->sidebar=='bg-focus sidebar-text-light')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-focus" class="swatch-holder bg-focus switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-focus sidebar-text-light')
active
@else
@endif" data-class="bg-focus sidebar-text-light">
<input style="display:none" id="sidebar-bg-focus" name="sidebar" type="radio" value="bg-focus sidebar-text-light" @if(Auth::user()->sidebar=='bg-alternate sidebar-text-light')
CHECKED
@else
@endif>
</label>




<label for="sidebar-bg-alternate" class="swatch-holder bg-alternate switch-sidebar-cs-class @if(Auth::user()->sidebar=='bg-alternate sidebar-text-light')
active
@else
@endif" data-class="bg-alternate sidebar-text-light">
<input style="display:none" id="sidebar-bg-alternate" name="sidebar" type="radio" value="bg-alternate sidebar-text-light" @if(Auth::user()->sidebar=='bg-alternate sidebar-text-light')
CHECKED
@else
@endif>
</label>



<div class="divider">
</div>
                                        <!--<div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>-->
                                    </div>
                                </li>
                            </ul>
                        </div>

</div>
</div>
</div>
</div>  
</form>
