<aside class="main-sidebar hidden-print">
    <div class="sidebar-item location-search margin-bottom">
        <div class="well">
            <form method="post" action="properties.php" name="frmSearch">
                <div class="search-box-header">
                    Refine your search
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Manchester, Great Manchester">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="category">
                        <option value="0">All categories</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <select id="prop_type" class="form-control" name="prop_type">
                        <option value="0">All types</option>
                        <option value="flat">Flat</option>
                        <option value="detached">Detached</option>
                        <option value="semi-detached">Semi-Detached</option>
                        <option value="Semi-Detached Bungalow">Semi-Detached Bungalow</option>
                        <option value="terraced">Terraced</option>
                        <option value="bungalow">Bungalow</option>
                        <option value="apartment">Apartment</option>
                        <option value="cottage">Cottage</option>
                        <option value="triplex">Triplex</option>
                        <option value="duplex">Duplex</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="bed_min" class="form-control" name="bed_min">
                                <option value="0">Min Beds</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="bed_max" class="form-control" name="bed_max">
                                <option value="0">Max Beds</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="price_min" class="form-control" name="price_min">
                                <option value="0">Min Price</option>
                                <option value="50000">50,000</option>
                                <option value="60000">60,000</option>
                                <option value="70000">70,000</option>
                                <option value="80000">80,000</option>
                                <option value="90000">90,000</option>
                                <option value="100000">100,000</option>
                                <option value="110000">110,000</option>
                                <option value="120000">120,000</option>
                                <option value="125000">125,000</option>
                                <option value="130000">130,000</option>
                                <option value="140000">140,000</option>
                                <option value="150000">150,000</option>
                                <option value="160000">160,000</option>
                                <option value="170000">170,000</option>
                                <option value="175000">175,000</option>
                                <option value="180000">180,000</option>
                                <option value="190000">190,000</option>
                                <option value="200000">200,000</option>
                                <option value="210000">210,000</option>
                                <option value="220000">220,000</option>
                                <option value="230000">230,000</option>
                                <option value="240000">240,000</option>
                                <option value="250000">250,000</option>
                                <option value="260000">260,000</option>
                                <option value="270000">270,000</option>
                                <option value="280000">280,000</option>
                                <option value="290000">290,000</option>
                                <option value="300000">300,000</option>
                                <option value="325000">325,000</option>
                                <option value="350000">350,000</option>
                                <option value="375000">375,000</option>
                                <option value="400000">400,000</option>
                                <option value="425000">425,000</option>
                                <option value="450000">450,000</option>
                                <option value="475000">475,000</option>
                                <option value="500000">500,000</option>
                                <option value="550000">550,000</option>
                                <option value="600000">600,000</option>
                                <option value="650000">650,000</option>
                                <option value="700000">700,000</option>
                                <option value="800000">800,000</option>
                                <option value="900000">900,000</option>
                                <option value="1000000">1,000,000</option>
                                <option value="1500000">1,500,000</option>
                                <option value="2000000">2,000,000</option>
                                <option value="3000000">3,000,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select id="price_max" class="form-control" name="price_max">
                                <option value="0">Max Price</option>
                                <option value="50000">50,000</option>
                                <option value="60000">60,000</option>
                                <option value="70000">70,000</option>
                                <option value="80000">80,000</option>
                                <option value="90000">90,000</option>
                                <option value="100000">100,000</option>
                                <option value="110000">110,000</option>
                                <option value="120000">120,000</option>
                                <option value="125000">125,000</option>
                                <option value="130000">130,000</option>
                                <option value="140000">140,000</option>
                                <option value="150000">150,000</option>
                                <option value="160000">160,000</option>
                                <option value="170000">170,000</option>
                                <option value="175000">175,000</option>
                                <option value="180000">180,000</option>
                                <option value="190000">190,000</option>
                                <option value="200000">200,000</option>
                                <option value="210000">210,000</option>
                                <option value="220000">220,000</option>
                                <option value="230000">230,000</option>
                                <option value="240000">240,000</option>
                                <option value="250000">250,000</option>
                                <option value="260000">260,000</option>
                                <option value="270000">270,000</option>
                                <option value="280000">280,000</option>
                                <option value="290000">290,000</option>
                                <option value="300000">300,000</option>
                                <option value="325000">325,000</option>
                                <option value="350000">350,000</option>
                                <option value="375000">375,000</option>
                                <option value="400000">400,000</option>
                                <option value="425000">425,000</option>
                                <option value="450000">450,000</option>
                                <option value="475000">475,000</option>
                                <option value="500000">500,000</option>
                                <option value="550000">550,000</option>
                                <option value="600000">600,000</option>
                                <option value="650000">650,000</option>
                                <option value="700000">700,000</option>
                                <option value="800000">800,000</option>
                                <option value="900000">900,000</option>
                                <option value="1000000">1,000,000</option>
                                <option value="1500000">1,500,000</option>
                                <option value="2000000">2,000,000</option>
                                <option value="3000000">3,000,000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-lg btn-primary">Update Search</button>
            </form>
        </div>
    </div>

</aside>