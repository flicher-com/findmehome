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
                            <span class="input-group-addon" id="basic-addon1">&#8377;</span>
                            <input type="number" name="min" class="form-control min" min="0" value="{{ $min }}" placeholder="Min Rent">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <strong>Max price</strong>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">&#8377;</span>
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
                    Property Type
                </a>
            </h4>
        </div>
        <div id="housetype" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="checkbox">
                    <input id="type-shop" type="checkbox" class="commercial-type" name="commercial_type[]" value="shop">
                    <label for="type-shop">
                        Shops
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-office" type="checkbox" class="commercial-type" name="commercial_type[]" value="office">
                    <label for="type-office">
                        Office
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-shared-office" type="checkbox" class="commercial-type" name="commercial_type[]" value="shared-office">
                    <label for="type-shared-office">
                        Shared Office
                    </label>
                </div>

                <div class="checkbox">
                    <input id="type-space-in-retail-mallfactory" type="checkbox" class="commercial-type" name="commercial_type[]" value="space-in-retail-mall" >
                    <label for="type-space-in-retail-mall">
                        Space in Retail Mall
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-factory" type="checkbox" class="commercial-type" name="commercial_type[]" value="factory" >
                    <label for="type-factory">
                        Factory
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-warehouse" type="checkbox" class="commercial-type" name="commercial_type[]" value="warehouse" >
                    <label for="type-warehouse">
                        Warehouse
                    </label>
                </div>
                <div class="checkbox">
                    <input id="type-medical" type="checkbox" class="commercial-type" name="commercial_type[]" value="medical">
                    <label for="type-medical">
                        Medical
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
                        <input type="checkbox" id="amenities-id" name="am[parking]" value="parking"> Parking <img class="aiicon icon icons8-Garage" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADwUlEQVRoQ+2ZgXEUMQxFlQqACiAVABVAKoBUAFQAVECoAFIBpAJIBUAFhAqACiAVwLyM/o3G7J7ttfYSBjSTSe5uz9azZH3Z2bP17JaZvTCzxz7FWzN7aWbf1phyb4VBS4ByilWAMkFKgHMze+0/wDzzn2trRCgD5LqnEI7KTszsaCKNgOX9R+FZYEm5nyPZMQICwFNfZf7G5gBKH0sgIAA6Xgq0BGQEYAoIgAf+wWKgXhAiQGooAp/89ceRtDCz+z7OvQDEPESoyVpByGkGJiWwLIDSyRKIUs28pOxWq4GUAF98T4xGoOYXQKTcbX+wCjQH8tDMXoUIfPeVQQN2aYgpEbkZgJ6Y2R8LWYKwEqgxv7HLAigXqwQChJK9ARLIHY+AABAzdGHXEahFGyBSTqIKyHMzOwMEiA9eiaIaDwlUzaOBz6mYsUvAzwNA3nsdpzLwwFUFKNkBIjoUpFNAfvkTN/4iCEEhB195EUFqpXggG1b96kUgRkDUZ0kkR72tasXMBEMg5CYgaxhtSeyka3MsBqFEU+UwSh9QGYbziDB2MCV62RFhc5FOCBKqm2mMhyCTZvuNAy+KCIL0xhVfe4NV5H11xI3zbx6j3CO8RBcDgpaEVqRFkLtBcJRo8FuTxHToBSifP3RN02IBSFRqutYNorDTwrNPpsCWwEw5TuvB2aQlfbtASKPP7rw24jszo0s+9d9LIPQdOU6XQWRUUIjG3coVUhcIuXrRCrjTmojejF5t9K6KhTrzZlALFVsn3Y1NLVYzCI4SDUw5y2smX6P8qmJt2g+PCqBdIKw2lalUbAmV9gqnRSAzDWc5FWpvTAkvoPFwNRsR6UR0kBQCjA1e7pVMkHJvsEdwXOcPzRV1ZhZE3fBUE6m9Qsu/LW9H4GpzlP4tAtEgI472fHdqMZtBCGcMpYQKB5TDPc4sfTbuQco85V7GXYL28GxEyFPCq5uLq3DgYm/+cAogSGtdPFTL77a9snSVR74358+/DUJe0u1KP9gziGKGstfGTYtI7LdiirT0Q9tSqnXcNBD1PnS/VBGM9+hSRxrH1nHTQKgaVI9YxVRNek50ZXRax00Dkb5EEDV2sa73VqbWcdNAlALUb0QSQ6TQnYzUqo2bBhLPDFMNZe1IOhep1nHTQHCESWmtY/lFZZdCCK5l3FSQ3vzPfP4/yNYVyFzqmbHKFj49Irs6k+wMZK1/Q9QyYRKQNyVI3B/Fm4reAbOyrWde3fCcA7Lmvwiy4GrjHANCv8QVD3pQ3lbUBrjsz7nd4TR79Bu351yRKzWhTgAAAABJRU5ErkJggg==" width="18" height="18">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[atm]" value="atm"> ATM <img class="aiicon icon icons8-ATM" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEi0lEQVRoQ+WagZEOQRCF30WACBABIkAEiAARIAInAkTARXBEgAiOCBABIqC+rXl/9U3N7s7s7e7t/5uqK+fu39l+3a9f9/TckQ5kHRVw3JV0W9LVjWL8LemrpC/RvggE498lEBvFcM4swDxNoBSBnEm6Kem5pB8bR3JD0htJ3yXdwVYDuSfpU0L4fuMgbN6TxKD7kj4bCFF4Lan74Z4AISpE5AXRMZBjSS/3DAj+/ivplaTjMSCgvi7pj5MqRQtFu7VQ5L5JQpm8EKErkn4WcrcKiDnoDd8mIWBj8mkpeQYEFEeVSOhnARQqFXO4Cgi5QkR4EDGgvhBB05CQLrGgeEeXRB0igQ04FjXFFq9qIDzAgzY+AikV0zmA7YxLQCh82GARagaCFx4Hy7xhBDWH4fkeEQjGwwSvkxSZpoiQA4TTuQBf4e+aQHg3pYHFu3FuFIIqavV5e00gYxGvAoI6naaExwsUHjyyJhAYQaEmMiT6o6wMVAGBn4BBBlEvtPzaykB+JaXEBtvSnOxRJfZatT4kxXBEkFsisya1oBNMcERQzoetdYRQYrRVC/VgwzWBYANqadXi3djQJL8Ho1pEAsWATqgWbcNlRISWxaqFcjbXEXLkQQgLfOUEuSa1OG/gSK+PU3LkYFQLIJxF3P1yNibEjgj/LrHY190vNKKWuPulE26uI8gcGyB/LJ8FCLVBLgHExkLleCbicMf/ofwsqrWE8VP3rGpRpm6+5nP/JxByJZ6b1/S438W8IOZGc44AglY+TjA8WYmzV086zs1jKxBz+ssnNPys9D5a+BxMNbUYo9K6x6JUKoioGNIMoJZFp4DEFiU1K8bIcDcenaJavAQvIHteEQgAPfhmHhUNqgGEA5iPeSCN5MYzu/egDMCOfARVHREPIDyKYWO+58ttPZ+JB68aAP4MXoZarhkGwp6eX3kklQ8e2KMaCB6w13ID4zjIhSsfoA2B6nsG4/LlaMeGsQmIN4QyvvyJw7r4Qh+CaCzzF+aG4WXyj2jE/LNxiAYO9KVO32C9OiIlj8YcARytPgulgcfQhcj0vRxHkFeICPlHP8eiRSdXSjnSF9nZgPjCBQrCaQwBgI+nGBq7aIACnkg4ylAMz/uC6VKAlDzloRoG2tv+nOe4HvaVnt8MkGgcEXMOkEM1V3qTgUy9BEW14hWDzxAt8ut8i1cJJdUa2rOrQRjDXQcVM04nhh50ixLHQ86VvIWIF0L5BQ7vIGecG4ByHSld6vTZhDPPMAYP5GfhISC1Z/Y4cmW/0sjzojnC891sASCu3u57xqhh3o/dj1An8KzbG95D8uf9Uv4+HFubT+7vTjDGKlPbJ0VqOUcwLk9kDIq3xL4Czx3g4kh3i1TzXAu1eGZ3qzsWhfj7SC0bV7rWxqDYsrglyYF4j3jd1iwcY/QYq+xDQADMgczNH0A4IOXTl00A8WwW9Sn1VyiSh84kpee40UFQm995ttxSR3b7XCQi9EpjzWELZfksoOjVVqGWqUCSzf3nHuzNV/OfkkyJCJ6D51DBw7tWz/d9nmYS+jVPMf8BSv/X4HD0Iq4AAAAASUVORK5CYII=">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[water_storage]" value="water_storage"> Water Storage <img class="aiicon icon icons8-Oil-Storage-Tank" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADt0lEQVRoQ+3ai5ENURAG4N4IEAEiQASIABEgAkSACBABIkAEiAARWBFYEVDfrdNbp6bunTtnXnd3S1dt1c7jzOm/n3/P3KO4IHJ0QXDE0kCuRcTtYqyvEXG8lOGWAnIvIh5FxP2O4h8j4l1EfJob0JxAWP9hAeD/PxGRitM7gV0qngHo/VxemgPInQoAhX9ExOsC4qRj+cvFS08j4ka5loC+TPHSWCAUYn0K1dYH4PtAhW6W9cIvvWQ9L3UNsPeRrUC61v9VrM+qzZsX7RhF2DHK1bFeGgLERpLXRqxIWI3yk8Jhi5kZCijeJrzLS4pDr6H6gAiZ5yWmgZnD+ntDZIeXgFA4Xu4qDruAsMqriACANVjfgw4hcog+ogKgx9t0qYFQXPicJ3lRvHTa2cX+t2L9oVXn0IDpzEu35FJ6hCd45MEBQ6jVMELuQ0Q8UxASiMTmCfX8PAn2wDPHdY4Ao5xK8LMeXpSX+Mr1hoh2q1b2BTecZaEnVn2q/38gDe4SsmTOWWR1j8i3nwXI9X00o8E4qwPRm5KfKSBq/hyyKhBk70mhFDyjT72ZiT2sBkTV+1yYQo67uJpOfHcG1rwaEHlxpQxdSb95RcL/jgj5MkVWAYLIof/b6E7SCnTcfWNlcSBZpcztu5oqJczrU6rY4kCSfPblQebPhuyNdMniQJRbbCFL7i49leK/E8rxICDc3koa5QORyEPiP/NIQSDoeIswlDDu5VpuagGiEhlFM2SGzDSZ9BmCRumkMkMA0dHIsQhpbIn9IbnUB2hQaHnAWBqvZ8gTlu4TzRJdER5jZHEgGft9VWuOXrI4EBa2iTeGQOFWteBezntHxutj304uDoTSkhavUv0UgpxDnPenWfLKlPlkFSDpgfyMUNP4+jPDmNzINasCmaLovrX/geyz0NrXmzyiuqhC+T5Y95WgSb/RCh84k/jpH+hJvux2jBjWr5hMiUqzaiXh0f0cf/NFddId+ygOzhP7WOd8E5DuO67uMdIHSDZPxzXP6h53e0weJ83oHvft3wQkLZujqsVpSRbiHefSYmmt9BAgPgHwJHHf2zKHWMvT6XXX/e+e5Fz2FxFpqFqfJiAe7kH1qFo3sPpa9o+6N3Svd583ZM2u/QcBwSrP+ncSXteftrJfRG4sWVy7atWNcUNQE1ESOdzoUJ/YWo1BZ9xtM/8kkExEIdUleq0brHU/EEJsU1ASSLLW/DXCWspM3Sff1pzUnxXy5xUtI+dURaasVyGlwaaSDvnBwJTNVlv7DydnCEJfbM4TAAAAAElFTkSuQmCC">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[waste_disposal]" value="waste_disposal"> Waste Disposal <img class="aiicon icon icons8-Waste" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEAElEQVRoQ9Wa/bVNMRDF96sAFaACVIAKUAEqQAWoABWgAlSAClABKkAFrJ+VuSs3b2aSnHOee+WfZ91zksyejz07OU607Xgs6Z6kS51lv0l6JenpVtufbLWQpOeSHkyuB5Ank3Pc17cE8kPSeUnXJH3uGHdV0idJRObysQH5XQwadc7s+ynekU1flrzfwnFL16Ce7meTe0DIXwr4GEZaTx4Q8vyZpBuFfX6Vvz8PhAZ7qKVz5e8HSY8k7dnTAmHS11K0ZvcLSQ8PBMK2bRkREJDEDkwLhFy8K+mLpNvFAwfGsLc9/emtpCuSXte12wIhGrw8QqGHAuhSdwvEKPFQRs7uu7O/BUIjI2z/wyD9ic7fEdEvzHBd0k1J/PsYBiz6XtLHwqh7NkVAKKhbpQlBAMcwEKM053eFiIaAWCPcTNRt4InUpigiKfoNjFqyRJolEZAoHykuJAudlW7rDcJPHkcpiZOov0g7Qf8oC7KhVtFp3UZA6PDI8pYQeilnHO8WZFmvRyTRHqlazkQj7R99c6GSArZJJFsMCJ6kqXqj13RNjtT1SZSYh+7DyadGBsTzXEqBZfXeOaP3fNG+GRDTXdQDXmIYkMzjPUN7zzk5Etm6hyFaqZs9fVWHJQOyKFcl9Qxd8rxXm2FnByzq943TSa12kNEecy0x1Jwb1YKl252ifqdqJEqjHuusARLVoJduQ53dXvKM6skXonSxHHzaiBmrfQ/uvqJG3HNOmlqA8dKol69ZxHqs563dpd622Xn07BllXosYZA0QY0q6vimDHvhTXdsDYs3Jo+Coe68B4s016k3vDkavg7wuS9rR9duxBojdVtaM6HX6KdaqG2Dr/az41gDx1u2x5FBqRdrJjsTeJUXmwYwobK+9I2zRWN0LkV5qgXbWS5mx2bOoqLvUO8JavGN9ofb+Uq+PgKyLutd3drUyEhEvR0cM8o7Js/OGqHc0Ip73Ix3GmrPGmlczh3WvbUci4h2mMk9lhy+vL2VAsventNYSCs5AZlQ6SyrTQEzrtJ/JbOP6KJwB51kExO4I2qOsHYujI8NUsc9S8JKIrKLe0WLnPa8BmpxvDztLgBh51LeItk7bID1N2JXxI4zS0uwSIB7TZcw4rbVsgrdRdCEQ1RRrRTnvyffeuWe62JngSWnrut6lMsoYcthd+5ddSVGAtndTlqa1evBucdy0mqmR7AoVg9sPpRjLb+3vALCPm7VR/Mac4SvSFtFIQ2SOpUt0Bgk9teKBdzZZHZGIglfY2Z06pHptldGI1BT8L75iDYvFJUBM95DHgDmr/0BAvfCJDaIY/tA0ExE2AAR3Vv9i0AiJzJDDZoBY0cPvNCs+OZzFQG9Bx1D+EAiM+AOJxYFCB0ukBAAAAABJRU5ErkJggg==">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[conference_room]" value="conference_room"> Conference Room <img class="aiicon icon icons8-Classroom" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADoklEQVRoQ92Z4XHUQAyFXyoAKoBUAFQAVABUAFQAVACpAKgAqACogKQCkgqACggVwHw3+xjFs7a1ju0z2T83dydr9aS3klY+UG59lXQ/J7qq1Kmku+x4kNz2T1JuH2I7DK1AsvJrALJzm4AQQtadNSxM7jEJSFL3qmKTgDyR9CJEhAi9lfRxVdMvbtYE5LokMlYfpQD0QNL5HgA1AflWQPwsETkuBpOKichNSf9S4Mpg0kCeSnovCRBEpOt1ogUIwDyT9GGrQByNx5I+9xj5SNKnhqjgnFeSbhXgLy9By3RELHhjYDMM+l5AjtUYRzj65F2h7JRg7gUI1CTCLGgIJfkOXXHUlJUGwma3JWWodTaQ2ThLGE30HAFT8rck/p+y0kBMhR+lMasddhs4dNjdcBosgHgOAEeSXk9BISkNBP2OCmAoiCdl03sl/WLUUDQwksON56EXepxE0HWZjroJCF6jdkCx2gIExnSjBcCHBSzPUTTRQ+15PpDSW4LTBMSKoRkRMSAAYBS1A6P5HY8Dis/Ie9MnZi3uEG5EW4yPsmkgGPOmGIexLYsiiqGOAuA4K+icq3imgIz1WBEU/MdgG85npFrURZNJZOZYKSDmMhRi4yk0AADnhAPvpFA7T1NBpYBQrdn8sGSals0wnjoRPd+XFFr0dmVTQC4IJXfjPGF8POikWBLCWEOZmQl0E8RiQKwY72M4jSZ1I7MyQDiHpHGvxYGMNY81YBkg3QL63wJZnVpExG1IhlZzyJz20WDKYY/PuEebw8iUjqWApDafSWjnwKWArE2txYCsTa2zpSIyE2vyaq40EBo7Wm4vKip3Cg/num5CnssS/RWLis7dfEieW6Nvhxn9o/LdiHB5omeqrdr9mg367tz8zjNx+eqb1Z+Wj0BiJBic0crTANIIovBauLJiSFfeQzwiY2f4ihvlub+gz43kmP6UfASCIbTgBhG95kjFfmdI3p78EigHhRhaZPU3yUcgv0oEapPF2kRxSJ5I8n8cwA1NLmv6m+QjkKYHw1wpC3xR/a3UilTJUHE1+dphhw5w3G+jeFvFwWfVDu8m5FvS79AhraXTVeUjENImL3b6hsp4nplUTLObkTcQT8fxLCkWasXXbHwndZpefLr6b0H+GCBEgPHP2HTctcHDty3JHwKkVrx6upRdlByZmJH2LX8EEBsXM1KfYbEt2ZL8CUBa7+dblD+/KkB2V93McKyPapv5HSBr36+XAH/2F4BycetzoFVTAAAAAElFTkSuQmCC">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[security_fire_alarm]" value="security_fire_alarm"> Security Fire Alarm <img class="aiicon icon icons8-Fire-Alarm" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAD4klEQVRoQ+2ZgbEMQRCG/xcBIuBFgAgQASJABIgAESACRIAIHhEgAkSACKiP6auurdnd7r7du3P1purq9t7bnem/++9/enpPdCTj5Ehw6BzIoUVym4hclHRb0h1JXPO51gB+lvSzfd5Jet+uV8NfAYLhDyXdTFr1QdJLSQBbfGSAYPiTAQA8jWHfmseJBIPIEKErLWJEzgaAnknie7ERBfJc0qO26ndJTxsA6BMZgCKSPHe5PfBC0uPIw5F75oBgwNsWhV+SWJxPFMDQBubDIXwutKjc3WK+zfxTQFj0rNEEEFDLqBNx0tQ9UA9qAYY5b20LZgoIIDD+S/uuRmEMEI4CzNX2DZjyGAPyStJ9SUSChF0ahBkMGISCyKBolodpQD0gRIFoLE2nMeM8zYhKSc16QIxSSCQqs4vBOkg7IEoUGwJBIlEpJBZPrUWpnpqR9EgzKpbeNIdA8MgNSQ8kvd5FKNwa5CS5ySaLQ1PDAyHxfrSnL+0wGj7xy+t7IFt5JOW+8ZuhFOVMmhEeSHmSJtGUMb76pfxAWjOj7EwPxPIjK4HsM59akeiNRiiuJ8GY9H/MVtceCMbgURbPlCIWSRa3JOVviEY2cVkfO1gfO8LDA/ndnporJIeTk6AIhRcIEw6odRq25t+NJTuWAAKFKDE8EOj2te1HXGfG1kDMoCq1yDE2M4aV/lVqUR4R1fBYKtnhNFHxA2PgfEa5xpKdqE6qogfCTn6vouFNfjlwefmlks2AwAkmv2/aNX8LqeL/sCGGVNEDsQTFC/suUVA6i2ZIFQ+xaBxuhlOquBGFIRDjKN5AvXZZxiPXKNWwzrLc7aniJpd6mx8KxDl6HwerXmkC5WdVceqoSzSouzLlSlj33Y0oHadSojFW5wGGUySqyiAS/N6o4lg5gpTSFgUMibcWxTDeKBVpPozu+lN1lVFskb5TJ1S+b0bLyfagsahaQdm9d65BZ32npWnm6RTtm02eVeYqXbxmJTlgoBwUqFKN+aAsuz7XVvpH5rPuTvf0OAfEwmw5w28SjETLvPOwdynMY8VgJCdsfd9r6zYMo0CYkMkwBGm2QbTstQKbk3+tQBFprxV8V4Qo4IhoIw7gHLaYa3RLyAAx4005KlLLM5k1w4KQmXQIhHqMKOFtvMWiFi0SGN5DQyKG963VE12TuelzMfdsDzo6qfd+6QQXPMKiZjgDhbJXeyFV2xeQCD3txVKo/3xoQPC+0RFKRmT5L1sqQCpne9uVaY5nmxEhUakAsVcAoQUGN61WUVeAYBtgSEh7QzsHikhwrgjxfW6y3v+rQCprrfrMOZBV3VuY/Ggi8gf+2g5CGpnruAAAAABJRU5ErkJggg==">
                    </label>
                </div>
                <div class="col-md-6 col-xs-6 whitebac">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="amenities-id" name="am[elevator]" value="elevator"> Elevator <img class="aiicon icon icons8-Elevator" width="18" height="18" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAACxElEQVRoQ+2a/ZFNQRDFz0aACBABIkAEiAARIAIrAkTARoAIEAEisBsBIqB+r6a3uqbuzPS9dbW96s5/782ceX2me/pr3pGWj8uSPhb4XUk/Z2z1RdLN4Pqvkm6N1h6NFnTm30m6X+bfS3owYy+EuxFc/y1CeimRV5KeSPpVhLkk6bWkp0HhrkmCTAvn90dzp6N9lxB5JOlN2dhUjqkwHkt6O/rRMo+AU7h6fwgPx1wiq/64pLUORXOIYA6cIJd8yozMHLj0aGpoDuWYPY6vWvt3tTKHyOqexkmGs7hXPn9wTmRoUrZgDpHVPY2TEi18Kp/vzHTlB9gcIuHT+RcL/zsiz4sH4UJvaeBQcPcv0Ih5jS0RqGU9EPlRXB4uMxR8LhBji2unEPldBNvqfTnIHyHCvXnpEje09iwQ8LJwISI+mnuLGkXvTFyIiEXcz1XKfltSLwJn4kJEzBFccdGWKMz3uL7rjYufiQsRwYSoGTwRzOa7pDNJrbiTiQsRMRMhD7IKkMqQfChiWhm4EBFfyXkrojLsVW6ZuBARhEcoor81C3C/lLSjeiMLFyZCbU4l54mQ31Bc9UYWbkjE2j2ttg2amWoDZeOGRKwixDthSr7wwdSultys7jll47pEEJy0BBJopG6+cepoBDK+c5KNw7S7ROxUcbm44KlBcw5X7DuB2bghEcuIfSCsyViE9yVzNi5MZJTa1yVAtCRYC7cTqc1rrZNdqsldI7tGqhNYyyTDpkWOddKIIw/dE4J5NxMwCzck4vu8U09fvqHtX5SycUMiLPBvF3U8sZOfetjJxg2TxnO2E83ukbtszf8N3E6kpynzC7tGGu3bnknuprWbVqDzv+RuzTKtVrekVa+YQBm4EJHeS27vPyKZuBCRQevqQkyfE7GG85af3s6w8WNJvOpueRweQxmQIdmjT7WlQd+N9u3xH5drkN9JH4HrAAAAAElFTkSuQmCC">
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>