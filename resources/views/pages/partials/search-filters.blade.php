<?php
if($country == 'ca') {
    $currency = '&#36;';
} elseif($country == 'in') {
    $currency = '&#8377;';
}
?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Budget
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <strong>Min price</strong>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">{{ $currency }}</span>
                            <input type="number" name="min" class="form-control min" min="0" value="{{ $min }}" placeholder="Min Rent">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <strong>Max price</strong>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">{{ $currency }}</span>
                            <input type="number" name="max" class="form-control max" min="0" value="{{ $max }}" placeholder="Max Rent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" data-target="#housetype" aria-expanded="false" aria-controls="collapseTwo">
                    House Type
                </a>
            </h4>
        </div>
        <div id="housetype" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="checkbox">
                    <input id="type-apartment" type="checkbox" class="type" name="type[]" value="apartment" @if($type == 'apartment' || $type == 'any') checked @endif>
                    <label for="type-apartment">
                        Apartment
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-house" type="checkbox" class="type" name="type[]" value="house" @if($type == 'house' || $type == 'any') checked @endif>
                    <label for="type-house">
                        House
                    </label>
                </div>

                @if($country == 'ca')

                <div class="checkbox">
                    <input id="type-town-house" type="checkbox" class="type" name="type[]" value="town-house" @if($type == 'town-house' || $type == 'any') checked @endif>
                    <label for="type-town-house">
                        Town House
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-multi-unit-house" type="checkbox" class="type" name="type[]" value="multi-unit-house" @if($type == 'multi-unit-house' || $type == 'any') checked @endif>
                    <label for="type-multi-unit-house">
                        Multi Unit House
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-main-floor" type="checkbox" class="type" name="type[]" value="main-floor" @if($type == 'main-floor' || $type == 'any') checked @endif>
                    <label for="type-main-floor">
                        Main Floor
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-basement" type="checkbox" class="type" name="type[]" value="basement" @if($type == 'basement' || $type == 'any') checked @endif>
                    <label for="type-basement">
                        Basement
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-private-room" type="checkbox" class="type" name="type[]" value="private-room" @if($type == 'private-room' || $type == 'any') checked @endif>
                    <label for="type-private-room">
                        Private Room
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-shared-room" type="checkbox" class="type" name="type[]" value="shared-room" @if($type == 'shared-room' || $type == 'any') checked @endif>
                    <label for="type-shared-room">
                        Shared Room
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-duplex" type="checkbox" class="type" name="type[]" value="duplex" @if($type == 'duplex' || $type == 'any') checked @endif>
                    <label for="type-duplex">
                        Duplex
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-studio" type="checkbox" class="type" name="type[]" value="studio" @if($type == 'studio' || $type == 'any') checked @endif>
                    <label for="type-studio">
                        Studio
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-loft" type="checkbox" class="type" name="type[]" value="loft" @if($type == 'loft' || $type == 'any') checked @endif>
                    <label for="type-loft">
                        Loft
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-condo" type="checkbox" class="type" name="type[]" value="condo" @if($type == 'condo' || $type == 'any') checked @endif>
                    <label for="type-condo">
                        Condo
                    </label>
                </div>
                @endif
                @if($country == 'in')
                    <div class="checkbox">
                        <input id="type-pg" type="checkbox" class="type" name="type[]" value="pg" @if($type == 'pg' || $type == 'any') checked @endif>
                        <label for="type-pg">
                            PG
                        </label>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapsefour" aria-expanded="true" aria-controls="collapseOne">
                    Available for
                </a>
            </h4>
        </div>
        <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">

                <div class="checkbox">
                    <input id="av-women" class="available-for" type="checkbox" name="availablefor[women]" value="women">
                    <label for="av-women">
                        Women Only
                    </label>
                </div>
                <div class="checkbox">
                    <input id="av-men" class="available-for" type="checkbox" name="availablefor[men]" value="men">
                    <label for="av-men">
                        Men Only
                    </label>
                </div>

                <div class="checkbox">
                    <input id="av-couples" class="available-for" type="checkbox" name="availablefor[couples]" value="couples">
                    <label for="av-couples">
                        Couples Only
                    </label>
                </div>
                <div class="checkbox">
                    <input id="av-family" class="available-for" type="checkbox" name="availablefor[family]" value="family">
                    <label for="av-family">
                        Family Only
                    </label>
                </div>
                <div class="checkbox">
                    <input id="av-senior" class="available-for" type="checkbox" name="availablefor[seniors]" value="seniors">
                    <label for="av-senior">
                        Seniors Citizens Only
                    </label>
                </div>
                <div class="checkbox">
                    <input id="bachelors" class="available-for" type="checkbox" name="availablefor[bachelors]" value="bachelors">
                    <label for="bachelors">
                        Bachelors Only
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapsesix" aria-expanded="false" aria-controls="collapseOne">
                    Posted by
                </a>
            </h4>
        </div>
        <div id="collapsesix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="checkbox">
                    <input id="owner" type="checkbox" class="posted-by" name="postedby[]" value="owner">
                    <label for="owner">
                        Owner
                    </label>
                </div>

                <div class="checkbox">
                    <input id="agent" type="checkbox" class="posted-by" name="postedby[]" value="agent">
                    <label for="agent">
                        Agent
                    </label>
                </div>

                <div class="checkbox">
                    <input id="roommate" type="checkbox" class="posted-by" name="postedby[]" value="roommate">
                    <label for="roommate">
                        Roommate
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseOne">
                    Ameneties
                </a>
            </h4>
        </div>
        <div id="collapsefive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[internet]" value="internet"> Internet <i class="aicon fa fa-wifi" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[ac]" value="ac"> AC <img class="icon icons8-Air-Conditioner aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACm0lEQVRoQ+2Y7XEUMQyG31QAVAB0ABUQKoBUAHQQKiCpgKQCoAKSCgIVkA6ACkIqgHku1uEY3/hjvY49g//czay80rP6sOQ9/V37kt5J4neGdSbpVNIXjN1zFh85iBkAQhuPJR0Bggcu3NO3kiD9MTjRI0mvvY//HBBc80wSECeDA4TmWSSdA/LbPX0g6ddkIHjmu+WIgVi+TMZy4wjfI6OB5H7gIUEIFSs0IYj/zI+a4UBeSvos6aMrPFde7r53VerAVdWhQfyzjKJz31nr/9+cGUESD+cR7CN88AjHgb++Oo/EzrdhQT5E2iTOujc7DurhQPzQupZ0z7nE/z9FaFmyf5J0KMlPdjqOV5KmSHbLkenLb9hRTH0g1rRHwyV7DQR7/oPUfrm19v3jkbUUdXmv38Z3UbiSkmtAmNFfSIqdmivpbfbaW6OuXT7QZT6eaNylO2bM5ffApkK7gGj2qTq+iM5430CeSPrWUXlLVU8lXfpzOnMAjRk5Q3M28mKSpMmkweR+a3vTaA3bpWufgSL5R7uoY/Bi7AWC9p5I2tgY3pwgAITNAjGv2B6KBEMQi6FncwcbrCUy1jTGbAACW7c6Y1dAUFPWMOJh5C22h4qBLIuvQsUL1xKZGMhPZzz23YqWJXdZlGvzHAoMyodpJZPM1yUgeIwwZJFwu0KrhcyqIMmX9xRY4pGediZ11YLkVCOUt5bbCVQLklONUNparjlITjVCaWu55iA5FctCK1W1SuSagySTr7dAbY70tjOprxQktwqZ4rXlt4ClILlVyBSsLV8NkluFTMHa8tUgudXKD62cqlUrXw2STLq7EijNkbuyM6k3BVJadUKF3fanQEqrTgjSbX8KpLTqhCDd9qdASqtULLRKqlb1/j+7HtACuS7jUgAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[tv]" value="tv"> TV <i class="aicon fa fa-television" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[garden]" value="garden"> Garden <img class="aiicon icon icons8-Leaf" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADbUlEQVRoQ82Zj5UOMRTF71aACtgKUAEqYCtABagAFaACtgJUgApQASpABZzfd/LmZPLNJHnJbHZyzp79M7PJve/d9yfvO9G+1yNJNyS9WIN5smP8gH8r6Y+k0/D9CO5eCTxPrP5Y0rslY++NwC1JryTdTcD+DF7YrQfQOVZHNmvrTNKH9OFle+B+AP2gIhbPlwiOJnBVEqCRCKD53bOupcE8ggC6BjSA+blnHQXzRREwwC1WzhH8GAwxvbMlAaz7pFEaHq/MMG9BAD2TQdLU5wHlefeepM/2Dz0ESH1UylHADfPLuMi1EiBfU3C8WcRj6bV3v8RGayGA1XMFZwuQpT0m3B4CWBvwNUWnBKD0/Lukm5mXbkv6xnMPgfeDwIMLnZMYim1FLYHRsqFgcebamgK5hgCSwfqjFsWKpi1HYOqLSgTQ/Y/B2QbrW1EsZqISAS4RD0eZXtKvcIX8WuibplSaI4D1fw8Ez1FYnyqL13OLDEQmymahp6FYjeLwN0jV7sKlcw/Gz3kAS9wp7bLhc8ssJfnYkUUC/zYEV9rKtE/wQqBm7YqA3Xc9SSNLYGQAW0ahuy0Fb+yZ3XjA+hqP9U1ylx7EFrjcKT7VCD+8U1UHmEfmGirHeYuv0nHaJb8289hGVQS8mvQQIucDnolbS72pbuY8uvQQsPEIRsL63pvdM0mvS4WM52xM2b7uQVd4N77TeqVjW08X+1Izxz94AyyHP57r9MSY+0pZ25/kwBO0GIN5f49Rmi/1XGyIiSsNcorBt+rejp30XxMDKVYOh4SnyYvBE1Pk+54ZKZ/WkL0OqyYGlgyOpNBwKbhj8OzTOxiYyaeHgJFCVnzhmdQrKfgtBgMXMp1GDoCLZZF+GNGTccxYceWeVNEqIduAaTTg4kI0C7IwxctNGGpzwmyo2xsDXPQBjnRs0SESG9PkeEPwb0LLcUTW4wHAAtw+fI43o0Dxd3K8rS1qB3sdBW58cIkAuiY4AbOU+mjKeHb06WFIt70jGcCTJGLDzLwQE0DHDFSpkoDle67JIlDpJFc37ySxKps1D9Re4rEKwA/T4YqFBekcSzXDtmJ/4iuOpdVjYg8AKDfSdm28cCJEzLtxzSD4qazIkK+pylYYZ1aJ1y4WSIX2ocoiNYdu+U4axLiaoMQbWAPgOY1viaVpr/8/LqgxjPf0UAAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[terrace]" value="terrace"> Terrace <img class="icon icons8-Balcony aiicon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAC4ElEQVRoQ+1a7VXVQBC9VKBUoFQgVKBWAFSAVKBWoFSgViBUAFagVIBWIFYgVKDn7tnlDDdLJnM28byY7J/3kt2ZN3c+7kxy3hbi609cpEliKyIdOpwVr4AiHq6cDTk9dHgpEfKcoik69vl7QfWU17JlagOj+ldAGqWoB6c+v0ZocRFqbDOueIi4QoeX0odcFzceCDk9dHgpEfKcstK2pKjnsLUPLa4PeSmx1tBaQ8YDXrrM9nnoHYA3AG4AnAI46enuU9fEUP2PAdDuAwD8/pF2M0Lv84bF8CkD3OQIEcBrMTAB+p0R2r1rADsPRGmoB4v4VOdrdt8QUO09220F5NQGRvWzPB6p0x8C1JdyjcPzaOK1lAMBfQfwzPwMkTPd+LnJi0TwUzLpkoBeAfi8yZYHbDsufUijFNCxMUd/ANgtgBg+ssac1zbLpAB6mvNxzoBY99cFELvtuUHzJXfgcovFR9Bl7WUy4bU2Zk4ZvDeEhvtkXwD4avRcAuC9si4A7JvrQwAXBRDHnSOzOZZRVNnXWFsAqewZCa4A0q5rI6Ce+iXRUk8d53lwSIQ4P34wjkxG5Wv9XZ1edgFcGVm2mW0C0nRTg5XWNfTfADw3il8C4L0hgLy08sYmgnxi046AtOPqlODVyJSA1GCbOcTRsZ2APIN0PxWf8Yon3+dlL0KqW9O5I1+b5RKfBwzuY0CPFNQgNnhGoSwvOzr9swZIn2KVMHTfy/OWfa1vrd+Ow4YAajHIi5C376VkFZA+V6SOO5ClPIPG3k/UbGzTCee2RgpaeC1FPzYg6rMp32kpNdrWscdjGo9aIyynPdBzCEcjOw6ldwracanEpl11xAiwYASQFn3flFIbqPdK+NTLb3PTot3KNEqtLSnpFb2ORhaw7t17HtJNE4DZfE1BKBFST80Ghc6QljH+9d/GxnZawvJfA6q+uBvbjRPpu6N7bVIcxztvIycyYiy1BMMGm57B/gJY2gbOcmmknwAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[fridge]" value="fridge"> Fridge <img class=" aiicon icon icons8-Fridge-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABVUlEQVRoQ+1aQRECMQzcUwAOAAk4QAIScIAEQAFIQAoOsAAKwAFMhmOGB21o0twwneV73TSb3Vw7Rzrovz2AJYCpvjRkxQXAEcAuF71Ttj4AWIekVx5UiGxTMI3IDcC4fM8QhCgzsxJ5hKRkD5osvKYIidiLnkVWV2Teb3cOSri4FazWeuOGtl51RUjEaUUqkuoBWovWelWgeo80c444HWKGV1fEnIkTSCLOAg4H1+5aw2Xi3EkjMvSlUKPDHmlekWYORF4atW5WnldvdipCRYKu8bTWv1mrmXPEWVgzvPrr15yJE0gizV8anQ4xw2ktWstsnjyQ1qK1aK2gHrkDGAVVtzTsNTcPo32gk9mPTemOQetdsyiSk5BZAZgEJaiFFSVkOig5UJP9B+hL9NwbTFNWS9YduySBVL9kvasx6J+7Y5cQWfQSf1pMSIjtTj8mnFrmjv0EZ0xTMx+eAtgAAAAASUVORK5CYII=" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[oven]" value="oven"> Oven <img class="aiicon icon icons8-Toaster-Oven" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABs0lEQVRoQ+2Z4VHDMAyFv07ACMAElAlgBNgAJoANgA1gAhihnQA2ACYANmCDcuKsO5+bxK1sN27O+ZVcKuk9PUm20xkTuWYT4UEjUpuSTZGmSKEMtNIqlFizW1HkHZibPdRhuBAiqzqwpKHwiexrv/wLMWkiNfXMArh0RXcOPLv7a+DN3fcqUlvPaMl/AUcO/DdwvCmRsXtGE6o4foEDB/7HIxVVpDYiUlovjsjVNqVVG5G++bx3ikyGiHlq1VZabWppTfqLUtqGKG79CkgJ+ZdWhnlqdTkLZ3up567YSc1eCqhmech/+C6JiK6mp8CHt+XfBIgE3iYRciaSfZ6u2qFt0tS6B+7ipZ31Fw+AxA2JJE8tcSpbgsOscNediRKyBZF4XWq2vVZtC2JSsxeupkH3WadWI5IhA02RvkUuQ3JNLrIpYopewCg2PXtPiPKZ5awAIIvLJXARMZz+BzpL5sa0WVNkTDDJsaWRauoJK6GlToRH4AZ4Am6B8NkaIKfdIEYlooeaMLAeqHICsvoaxOjPaDkBnnhRPiv8J6sXY2yxsWZv53aNyM5THgnYFGmKFMrAH1QPsXSQG8aBAAAAAElFTkSuQmCC" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[microwave]" value="microwave"> Micro <img class="aiicon icon icons8-Microwave" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAB7ElEQVRoQ+2Z7TEEQRCGn4sAESACRIAMZMBFQAaIABEgEkTgLgJE4DKgXrWjRtfWTs3d1ez2mvl3N7s7/czbH7O9E0Y2JiPjoQINXdGqUFWo8A5Ulyu84dnLVYWyt6zwDVWhwhuevVxVKHvLCt8weoVOgQtgv/DGLrvcDLgFHsMDgkKbwJMjELsBAjsGFgHo1TFMgBPUgYDkYjfLaj6w+6YCsuq8AGfA+8CMtebsAA/AYTQxE9CXuXLXAUwwWVBvsf1tQN5S+R9B/iXQEXAPSN4SQ7E7BZ6bxVRSLoGT5rfi5joyJFsh+WgpmGCnoBTLGiqc52Yn75rsrL+zgWzSKKGS1gix/AlIpXjEwO6AFsCGAfqIvMYd0FUTQzGTYkj/u3S5EEdxUggwboG64tady6WSkDsgWwdtnXIH1FYHa9qO/bbvwiqX03FnuzFKNUivN+Fo5M7lRpcURgdUs5wNevvG2nY4TLnBqvPx4XPth1ObZVY1NnW/zWJrz3IpA/qez07bfRucWj8JtKWWauopA5lvbWOphboXGagKrCaFh0ajmjeKsTDmo2wFi86qNBCPyjJjrg8O8ecUuVrsellP6/liwcj1fj+nBHt0itXXCC9gAlHfTqfxn9HVx05V6FKiZNnRBZSq0KWAsuz4Bi+akHwDmhvnAAAAAElFTkSuQmCC" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[washing]" value="washing"> Washing  <img class="aiicon icon icons8-Washing-Machine" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADoElEQVRoQ+2ajZENQRSFz0ZgRYAIlggQASKwIkAEiAARIAJEgAisCBABIqC+qj5bvb0z3T3b3U8ve6u2tt7rmZ577rl/fd/saVluSXoiif8zyTtJLyV9TJXaW9DyaQAxE4BUl2eS0PNYUiAw8EHSr3Dha0k/J0G0L+kw6HVJ0u2YmRQIlN2U9FjSi0kApGo8kvRc0ntJd72YAvkdFi5PxEQK5Kqkr+HLY/3XgCzFzkwE2eBTACEeXwXrPEgyUW6NW6YCgnvgJsg3SdciynNr0wEhG5J9kO8RKD7n1qYDgvuQ3hHSalzkcmvTAWlJHlPFyAWQXWWt65LuhIaTtoLPyFEIYmKBqszns8pQ17of+iCn1JKSpFxaITrarTIECIpT2Nzyk0pRDstjdRRGuA52uI4e6Ur4nusoiL6uBlR3IChGt4wLAYDW2im1pJA7WQBRN+hma92tKxBAfA7a4vMotrXlxwAAJ6aQG5VgugHBTQCBIm8CiBIDuXXAEGMYAjAlN+sGBHfC10+cCVqQhLiCGWIGN8tJFyC4EMHNKRJmtrrTmoKwCxP0X/cK2awLEHemZJrawK4ly0ZKu+H0/mYgDnDYwIIjxJ1vLvCbgXjCwkiGs/MIYVbwUNKpSUn0sGYg8XACX6awuQVhjUJIFquJG7cxvh89uZ/jK8OFT5m5WjMQUm784DVGUIi/L1FdIDEcBPAYoOSaFEfca0magXgDNsfyuAEPRCnSMcHq4lZyO0CSLLgfNjEQ7ko9sawNQboByQUilsfiADMLKEYLQzZCaQCsFb24YxgGBOvhHrWtRImVpXUDgbE1N25mxMF+Ylx5Fm0z98Dm29HB7tTYo79aw+K+a2j6Ne2kV8aqI+RHSB5DCyKKE6ScIUa2KOmcKzVYc4ywofshWGE6WFP8apgjhdPH8X8nTSNKOegpejy0hxDgBHquovs5XRhhM+oDqZg2heDEzVqEYwFM04wShzs7WKF0XLhgBjBb3Qw3AoR/sKmtT90YsfUBg5vBDFakOyY110g8PoIJOoG/MnywsrgZ7sVPds5qHgeRfawcoMl2Hgd5/kVM4FYld4qN052ReHPcg4LpeVWJFUDSJE4zoEsVxvJuGokBejOE3okY8rml1o2WDDKUkRIDPdcvgPS0Zo+9/j9Gzv0LA6RCztzn/hUOv1RDmnSV3tp29IiBpT1I5XQDfkcm+1ING/wTrznZEjBD1a0d7YxiId2X6T+MnHrx7A+8iRRChia3pgAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[dryer]" value="dryer"> Dryer <img class="aiicon icon icons8-Washing-Machine-Filled" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACwElEQVRoQ+2agVEVMRCGfypQKkAqUCoQK8AO1ArQCsAKgAqQCsAKxArUCoAOtAKZbyZh8o7L3V42effmzWXmhoFkN/vv7u3+ybGj/vFe0rGkw8z8XH++lfRVEj9Xxk6PRZeSPs5lqXFfwJyma7tAiMS1Udncy96lkekCIWRv57bQuP/PNPW7QP4blWzKsif7FyAVQkJqxKLyrZPSQ3O97/icEdmXdB+seiXpLrFwaG7jgOxK+psBMjS3cUCokJ+CVfSutPkOzW0ckAqvmZaqVcOLNXUsEbF480/gQDehKv0OQm8kvZQEn+PFfm1RNrKmSURoYjDSZxQ7YwxgWO/hdtWBfJF0Xujhz5LOCmWrAfkX0iSmT6E9Iu2I5IuJCqoBOZDkBRFtB8yvOYB40iln79Q0c0dk5VAz0Ytjy6cc7txAVo6ZY5ZNnKea/TDKuIA8SIJ2txzQ+z3DBi4gz24wDBtOXUJ/OTEIuYCQVnjsQ+jSVBvOFVQvuvlVcs4YsuUoyBNdHnSi4yL8bkkvFxCOpWP3XgDioSikp0BoCRSFB7qSG8iyZmy4gETleJ5ujhfxKJEBIJ62DN61CJj1kYcRaetwAYEUYnCuEWIQ81QfntitYQHIUF4BkJPHIUTdQipdQGp285znu5cRuXUuIC17SDTYenXrArKO8su7x9eAseECQhXi3qnl4I7L0nRdQADQMr3WRlEAQuUBTIsBladyWYY7ImyyFTQ+eqtmKZ6SUnH/KhFBGRyLFPOeEkkluNUQbelLtWpAonJOdpC9kkGZLb24qA4kFoDeL64ZdKQSVN3z5bgJkGhvyqciv2KO9IF3xQs6a2UainJTICXpVSqzACn1XCu5JSKtPFuqd/sjMuWWr9SLteS+pxcU3e/s1pNZLWM8egb/qQbF1ssxjxFe2dF/c4ob1Pia5DW2Tz77VewRtNmgM4g7ft0AAAAASUVORK5CYII=">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[dishwasher]" value="dishwasher"> Dishwasher <img class="aiicon icon icons8-Dishwasher" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACSElEQVRoQ+1a/zUEMRD+rgJ0QAWoABWgAyqgA1SACugAFRwdUAEqQAW8772Ze7nY7GyS3cu+fclfu5lN8n2ZH5nM3QwTabOJ8MDkicwB7I9UW68Adn1sIY38jpSEwvqH2yIyNtPTDa5Eci2N/nYnk5wCeJbn2P7iGnkHsCngPwBsyXNsf3Ei3wDWBPynQyq2vzgRmtC9EDnxTCumvziRXB/T8ZVIXzvZ9zzR50jfAPqaL5pIPdn72npvnurs1bQCphU0Dfk+Wb7qND4ZqEW0FJFHALdOquKf3Ja8ePj1b57nQsgnou8h+WiIPAE4FLQHjmaUqCVPJpJ6h/cXdH3kBsAZAII+avABS74UT7r6yBBE1gF8AeCdZKOBiCXPItL1XAlFJ78/931BJlYjlUjgHKgaia00qimxTLkNwA2VoQSXEegBwBuAHSN7XblGLgFcSLwnmbamdeMrABzntlzg2Wk8QyHrUSzpEBxBNjWSpfxHSj4MraMiQjBqMnxmpZCAXwTlnrxrBf8YAPMlvxXXiAIiGdahtNjmA6UmWLdqIsFvXSJ64HEMn2PlS2t3PUfcQVyUyRxJMQCw0bEJnmmFb04h07qWeUIpiiXPJtJm8wHXWXSrRkha86umpNGSJyeNIYDWRSnkI9rPyryWTF3TsuSjIUJzohnqzwsK3E3j2+S9ELEy4bZ8zNJgsjzF2SdDxHLoIeXZJ/uQ4GLmrkS6XqRidjXn22SN5Cw65NjO4VfvH0OCSZ276Z4z/T/VpO5WsXFjc+bkjfgD8cb0M7/ZClYAAAAASUVORK5CYII=">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[alarm]" value="alarm"> Alarm System<img class="aiicon icon icons8-Dishwasher" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACSElEQVRoQ+1a/zUEMRD+rgJ0QAWoABWgAyqgA1SACugAFRwdUAEqQAW8772Ze7nY7GyS3cu+fclfu5lN8n2ZH5nM3QwTabOJ8MDkicwB7I9UW68Adn1sIY38jpSEwvqH2yIyNtPTDa5Eci2N/nYnk5wCeJbn2P7iGnkHsCngPwBsyXNsf3Ei3wDWBPynQyq2vzgRmtC9EDnxTCumvziRXB/T8ZVIXzvZ9zzR50jfAPqaL5pIPdn72npvnurs1bQCphU0Dfk+Wb7qND4ZqEW0FJFHALdOquKf3Ja8ePj1b57nQsgnou8h+WiIPAE4FLQHjmaUqCVPJpJ6h/cXdH3kBsAZAII+avABS74UT7r6yBBE1gF8AeCdZKOBiCXPItL1XAlFJ78/931BJlYjlUjgHKgaia00qimxTLkNwA2VoQSXEegBwBuAHSN7XblGLgFcSLwnmbamdeMrABzntlzg2Wk8QyHrUSzpEBxBNjWSpfxHSj4MraMiQjBqMnxmpZCAXwTlnrxrBf8YAPMlvxXXiAIiGdahtNjmA6UmWLdqIsFvXSJ64HEMn2PlS2t3PUfcQVyUyRxJMQCw0bEJnmmFb04h07qWeUIpiiXPJtJm8wHXWXSrRkha86umpNGSJyeNIYDWRSnkI9rPyryWTF3TsuSjIUJzohnqzwsK3E3j2+S9ELEy4bZ8zNJgsjzF2SdDxHLoIeXZJ/uQ4GLmrkS6XqRidjXn22SN5Cw65NjO4VfvH0OCSZ276Z4z/T/VpO5WsXFjc+bkjfgD8cb0M7/ZClYAAAAASUVORK5CYII=">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[parking]" value="parking"> Parking <img class="aiicon icon icons8-Garage" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADwUlEQVRoQ+2ZgXEUMQxFlQqACiAVABVAKoBUAFQAVECoAFIBpAJIBUAFhAqACiAVwLyM/o3G7J7ttfYSBjSTSe5uz9azZH3Z2bP17JaZvTCzxz7FWzN7aWbf1phyb4VBS4ByilWAMkFKgHMze+0/wDzzn2trRCgD5LqnEI7KTszsaCKNgOX9R+FZYEm5nyPZMQICwFNfZf7G5gBKH0sgIAA6Xgq0BGQEYAoIgAf+wWKgXhAiQGooAp/89ceRtDCz+z7OvQDEPESoyVpByGkGJiWwLIDSyRKIUs28pOxWq4GUAF98T4xGoOYXQKTcbX+wCjQH8tDMXoUIfPeVQQN2aYgpEbkZgJ6Y2R8LWYKwEqgxv7HLAigXqwQChJK9ARLIHY+AABAzdGHXEahFGyBSTqIKyHMzOwMEiA9eiaIaDwlUzaOBz6mYsUvAzwNA3nsdpzLwwFUFKNkBIjoUpFNAfvkTN/4iCEEhB195EUFqpXggG1b96kUgRkDUZ0kkR72tasXMBEMg5CYgaxhtSeyka3MsBqFEU+UwSh9QGYbziDB2MCV62RFhc5FOCBKqm2mMhyCTZvuNAy+KCIL0xhVfe4NV5H11xI3zbx6j3CO8RBcDgpaEVqRFkLtBcJRo8FuTxHToBSifP3RN02IBSFRqutYNorDTwrNPpsCWwEw5TuvB2aQlfbtASKPP7rw24jszo0s+9d9LIPQdOU6XQWRUUIjG3coVUhcIuXrRCrjTmojejF5t9K6KhTrzZlALFVsn3Y1NLVYzCI4SDUw5y2smX6P8qmJt2g+PCqBdIKw2lalUbAmV9gqnRSAzDWc5FWpvTAkvoPFwNRsR6UR0kBQCjA1e7pVMkHJvsEdwXOcPzRV1ZhZE3fBUE6m9Qsu/LW9H4GpzlP4tAtEgI472fHdqMZtBCGcMpYQKB5TDPc4sfTbuQco85V7GXYL28GxEyFPCq5uLq3DgYm/+cAogSGtdPFTL77a9snSVR74358+/DUJe0u1KP9gziGKGstfGTYtI7LdiirT0Q9tSqnXcNBD1PnS/VBGM9+hSRxrH1nHTQKgaVI9YxVRNek50ZXRax00Dkb5EEDV2sa73VqbWcdNAlALUb0QSQ6TQnYzUqo2bBhLPDFMNZe1IOhep1nHTQHCESWmtY/lFZZdCCK5l3FSQ3vzPfP4/yNYVyFzqmbHKFj49Irs6k+wMZK1/Q9QyYRKQNyVI3B/Fm4reAbOyrWde3fCcA7Lmvwiy4GrjHANCv8QVD3pQ3lbUBrjsz7nd4TR79Bu351yRKzWhTgAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[s_pool]" value="s_pool"> Pool <img class="aiicon icon icons8-Swimming" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADmElEQVRoQ+3YjZENQRAH8L4InAgQASJABFwEiAARIAJEgAgQASJABIjAiYD6XU2rubndffP2bl+dq52qq31v9U73/6N79tmLC7L2LgiOWIGcNyVXRVZFFmJgtdZCxM7edlVkNnULPbgqsoHY+xFxLyL2I+JTRLyKiMOFxDja9qwVAeBZRFxtigbmzv8ApAXwswCiwsuIuBIRT8rnRfCcVpHbEfEiIm6U6hLAm6paMR+LtW5GxI8lkMwForinEeFqDQGo630fEXcjwvXgPADh/dcVgN/FLvoilxhWAi7Zd+9rRFwqQAAaW2KRlMOCPcU/n1KzVxHTh4UelOwJgP9zGlFHr2SM+xocAOtx2QM4FhuaYvZ4V6ZdC1Q8NQ2OE6sHCP/zODCWUUqBGkBtMzHfIuJ6SVpPK6Dctwdg9aLEl5LnQ8khXn75WFPOwT7rAQIEpj4XttMubZ9QiQUkFSMpKwGSLCpKsVZ933cDgqJAsFW7ss/eVqr/i9kEhAq/it/zbMAMNrPRh2wmAUCUahPnfWCvVdXKIx/G0441mHr6XW5RbgIi/k95CCMYTUBjADKHuO/li4LrseuzgaCBc1BknqmaRmN6gGhekyqXacQGdaMPOOHo1pgdkl0xqUBacZMiCMx+7bZWzW4qMTg1BhrXlEuvD/keEY+qgZA9MnbWmGb2m9UjY0xP3dcXeghr2GMdRbfLv7OYgeD1BYA8a/Lc8P1W2Q8I+7H3ibeDHmv1gmEXFkzlMAfQ1Fuv4jAtRh8pEgjg2gWE+NnnyCYgCq9t5AwBoMeC9haH9Wx8+1FR0QC1Y32wntMowho8nlNnykZTZKQqbKTRZ625QCSnwjY2miqwZ/ROAgREQRZpN/2Ka18at7XRUDE5io319gdZtzqA5Pw2CR6OePusbFQXpi/yPao9F9hMXWry2evR0Gl/7ByxmRnuZS6bz3dTxzoLGylU4dj3lz/EuhkvoIxxdZ1wTt0jmta0ydGXjGTSbWzkGcS4jhVuPxMrWQcqlfAc8K7+coKJUReij7VC2+we9hBAqVCyJmEmbRnJpGLzZbJlOwt3TvSO5nqPrIuyCQj5fhJM/i9Ksqkwb7zbLKMYuwrO66ZB0ru/gUCRBCTHwTbj1wb+xhhPxfLaW9jcOAoBpBUOtwEyN+GSz7E0q+7/70COjd8lGdvZ3qsiO6O6M9GqSCdROwtbFdkZ1Z2JVkU6idpZ2KrIzqjuTPQXYHfjAglwBGgAAAAASUVORK5CYII=" width="18" height="18">
                    </label>
                </div>
                @if($country == 'in')
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[e_backup]" value="e_backup"> Backup <img class="aiicon icon icons8-Car-Battery" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABv0lEQVRoQ+2a8THFQBDGf68CVEAHqAAVUAIV0AE6oAJKoAJUgAo8FaAC5stcTObJZC/J3XtJ7P2VmWx29/u+u9tkLzMmMmYTwYEDGZqSliLrwDlwDOh6cXwCt8AloOsuI0kMC8gVcBqR3TVwFmFXZ5IkhgXkIyixC7zUZLEDPAc1NjoCSRLDAvIdkmuyi7FpwhjzvGnjQCoUm2wZUy7medPGUqTjtF/+Y1Ug2maPAC3gMQxtPndh6/+t7A/A/hiyr8nxETiQIheh6H2FWiCUXYvbsrhQEdXsUQ1akyoC8gZsASehSi8rmRRx9MZxA8wFpNwRVNCGrsQieCmjglqsEXNrS0FdRh9F/g4kI8NtXbsibRnLbe+K5Ga4rf/BKlKWg3JXtYA5EIuhvvddkaZXlCo7FtNdP9L6xohaI32DWOB1v2+M/wUkhtHUNr7Yh/Y94ooMTZG2ay5q12rrdBX2DmQVrDfFdEVckUwM/Jlao+80zoHNkfd+36vdePV9dTJ7P4IesHq+h6Ebr+uiG6+hM4a9THM4t9snne1Uv+p0TqIzh+3ckRP5fw0nVsrb/0VJRGo6N10bBukySORpMkB+AKHwgteM8EQZAAAAAElFTkSuQmCC" width="18" height="18">
                    </label>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                    Restrictions
                </a>
            </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="checkbox">
                    <input id="smoker" type="checkbox" class="restrictions" name="restrictions[]" value="no_smokers">
                    <label for="smoker">
                        Non Smoker
                    </label>
                </div>

                <div class="checkbox">
                    <input id="alcholic" type="checkbox" class="restrictions" name="restrictions[]" value="no_alcholic">
                    <label for="alcholic">
                        Non Alcholic
                    </label>
                </div>

                <div class="checkbox">
                    <input id="vegetarian" type="checkbox" class="restrictions" name="restrictions[]" value="vegans">
                    <label for="vegetarian">
                        Vegetarian Only
                    </label>
                </div>

                <div class="checkbox">
                    <input id="commercial" type="checkbox" class="restrictions" name="restrictions[]" value="no_commercial">
                    <label for="commercial">
                        No Commercial Use
                    </label>
                </div>

                <div class="checkbox">
                    <input id="pets" type="checkbox" class="restrictions" name="restrictions[]" value="no_pets">
                    <label for="pets">
                        No Pets
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>