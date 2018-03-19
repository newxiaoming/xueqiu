<div class="uk-container uk-container-large">

                    <div uk-grid>
                        <div class="uk-width-2-3@m">
                            <div>
                                <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                                    <li><a href="#"><span uk-pagination-previous></span></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="uk-disabled"><span>...</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="uk-active"><span>7</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#"><span uk-pagination-next></span></a></li>
                                </ul>
                                    
                            </div>
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>名称</th>
                                        <th>流通市值</th>
                                        <th>价格</th>
                                        <th>流通数量</th>
                                        <th>成交额(24h)</th>
                                        <!-- <th>价格趋势(7d)</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($ticker as $key => $value) {
                                            
                                            echo $tr = 
                                            "<tr>
                                                <td>" . $value['rank'] ."</td>
                                                <td>" . $value['symbol']. "</td>
                                                <td>" . $value['market_cap_usd'] . " </td>
                                                <td>" . $value['price_usd'] . " </td>
                                                <td>" .$value['total_supply'] . " </td>
                                                <td>" .$value['24h_volume_usd'] ."</td>
                                                
                                            </tr>";
                                        }
                                    ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="uk-width-expand@m">

                            <div class="uk-card uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <span class="uk-card-title uk-margin-remove-bottom uk-text-bold uk-text-small".uk-text-bold>各大交易所最新公告</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body" style="height: 100px;overflow: hidden;">
                                    <ul class="uk-list uk-list-divider uk-text-small" id="tips" style="overflow: auto;">
                                        <li>【币易】币易完成维护升级及调整提币手续费公告</li>
                                        <li>【火币Pro】火币全球专业站已于3月9日23:00起恢复NEO、DBC、GAS、ONT、RPX充提业务</li>
                                        <li>KuCoin上线SwissBorg(CHSB)</li>
                                        <li>火币全球专业站将于3月9日16:00起暂停NEO、DBC、GAS、ONT、RPX充提业务</li>
                                        <li>关于分发Enjin Coin（ENJ）的公告</li>
                                        <li>List item 3</li>
                                        <li>List item 3</li>
                                        <li>List item 3</li>
                                        <li>List item 3</li>
                                        <li>List item 3</li>
                                    </ul>
                                </div>
                                
                            </div>

                            <ul uk-tab>
                                <li class="uk-active"><a href="#">币种</a></li>
                                <li><a href="#">交易所</a></li>
                            </ul>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                    <table class="uk-table">
                                       <!--  <caption>Table Caption</caption> -->
                                        <thead>
                                            <tr>
                                                <th>币种</th>
                                                <th>价格</th>
                                                <th>涨幅</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DOGE-狗狗币</td>
                                                <td>¥74,300</td>
                                                <td>5.96%</td>
                                            </tr>
                                            <tr>
                                                <td>KMD-科莫多币</td>
                                                <td>¥10,937</td>
                                                <td>    0.73%</td>
                                            </tr>
                                            <tr>
                                                <td>DRGN-龙链</td>
                                                <td>¥4.17</td>
                                                <td>7.65%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>莱特币</li>
                                <li>猫币</li>
                                <li>人民币</li>
                            </ul>

                        </div>
                    </div>

                </div>