@extends ('moduls.app')
@section ('content')
    <section class="site-blocks-cover overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            <div class="row"></div>        
        </div>
      </div>
    </section> 
    <section>
        <div class="container">
            <div class="test-for-help">
                <h3>1: Тест “Де я зараз?” з оцінкою за 5-бальною шкалою</h3>
                <form>
                        <fieldset>
                            <legend>Чи ви почуваєтеся задоволеним/-ою своїм життям?</legend>
                            <div>
                                <input type="radio" id="" name="where" value="5" checked />
                                <label for="">Так, я повністю задоволений/-а</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="where" value="4" />
                                <label for="">Загалом так</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="where" value="3" />
                                <label for="">Частково</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="where" value="2" />
                                <label for="">Радше ні</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="where" value="1" />
                                <label for="">Зовсім ні</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>2: Чи вдається вам керувати своїми емоціями в складних ситуаціях?</legend>
                            <div>
                                <input type="radio" id="" name="rooleemotion" value="5" checked />
                                <label for="">Завжди вдається</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="rooleemotion" value="4" />
                                <label for="">Майже завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="rooleemotion" value="3" />
                                <label for=""> Іноді</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="rooleemotion" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="rooleemotion" value="1" />
                                <label for="">Зовсім не вдається</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>3: Чи ви відчуваєте себе енергійним/-ою протягом дня?</legend>
                            <div>
                                <input type="radio" id="" name="feelenergy" value="5" checked />
                                <label for="">Завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="feelenergy" value="4" />
                                <label for="">Більшість часу</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="feelenergy" value="3" />
                                <label for="">Час від часу</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="feelenergy" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="feelenergy" value="1" />
                                <label for=""> Постійно відчуваю виснаження</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>4: Чи легко вам встановлювати зв’язки з іншими людьми?</legend>
                            <div>
                                <input type="radio" id="" name="conectwith" value="5" checked />
                                <label for="">Дуже легко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="conectwith" value="4" />
                                <label for="">Достатньо легко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="conectwith" value="3" />
                                <label for="">Іноді виникають труднощі</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="conectwith" value="2" />
                                <label for="">Часто важко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="conectwith" value="1" />
                                <label for="">Дуже складно</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>5: Чи ви знаходите час для відпочинку та турботи про себе?</legend>
                            <div>
                                <input type="radio" id="" name="restandcare" value="5" checked />
                                <label for="">Завжди знаходжу час</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="restandcare" value="4" />
                                <label for="">Часто знаходжу час</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="restandcare" value="3" />
                                <label for="">Іноді виходить</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="restandcare" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="restandcare" value="1" />
                                <label for="">Майже ніколи</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>6: Чи ви чітко розумієте свої цілі та бажання?</legend>
                            <div>
                                <input type="radio" id="" name="goalsanddesires" value="5" checked />
                                <label for="">Так, я повністю розумію</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="goalsanddesires" value="4" />
                                <label for="">Здебільшого розумію</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="goalsanddesires" value="3" />
                                <label for="">Частково</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="goalsanddesires" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="goalsanddesires" value="1" />
                                <label for="">Зовсім ні</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>7: Чи вмієте ви приймати рішення без вагань?</legend>
                            <div>
                                <input type="radio" id="" name="decisionwithouthesitation" value="5" checked />
                                <label for="">Завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="decisionwithouthesitation" value="4" />
                                <label for="">Часто</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="decisionwithouthesitation" value="3" />
                                <label for=""> Іноді</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="decisionwithouthesitation" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="decisionwithouthesitation" value="1" />
                                <label for="">Зовсім не вмію</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>8: Чи ви відчуваєте внутрішній спокій і гармонію?</legend>
                            <div>
                                <input type="radio" id="" name="peaceandharmony" value="5" checked />
                                <label for="">Так, майже завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="peaceandharmony" value="4" />
                                <label for="">Здебільшого так</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="peaceandharmony" value="3" />
                                <label for=""> Іноді</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="peaceandharmony" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="peaceandharmony" value="1" />
                                <label for="">Зовсім ні</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>9: Чи вам легко адаптуватися до нових умов?</legend>
                            <div>
                                <input type="radio" id="" name="adaptation" value="5" checked />
                                <label for="">Дуже легко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="adaptation" value="4" />
                                <label for="">Легко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="adaptation" value="3" />
                                <label for="">Іноді виникають труднощі</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="adaptation" value="2" />
                                <label for="">Рідко вдається</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="adaptation" value="1" />
                                <label for=""> Дуже складно</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>10: Чи ви вмієте залишати минулі образи та негатив?</legend>
                            <div>
                                <input type="radio" id="" name="leaveinsultsandnegativity" value="5" checked />
                                <label for="">Завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="leaveinsultsandnegativity" value="4" />
                                <label for="">Майже завжди</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="leaveinsultsandnegativity" value="3" />
                                <label for=""> Іноді</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="leaveinsultsandnegativity" value="2" />
                                <label for="">Рідко</label>
                            </div>
                            <div>
                                <input type="radio" id="" name="leaveinsultsandnegativity" value="1" />
                                <label for="">Зовсім ні</label>
                            </div>
                        </fieldset>
                        <button type="submit">Отримати рекомендацію</button>
                    </form>
            </div>
        </div>   
    </section>
@endsection