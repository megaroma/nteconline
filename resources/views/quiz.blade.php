@extends('master')
@section('content')


<div class="container-fluid">
	<div class="row">
			<div class="col-md-2 col-md-offset-1">
			<h1 class="text-center">List of lectures</h1>
				<ul class="list-group">
				@foreach($lectures as $lecture)
					<li class="list-group-item categoty_menu"><a href="{{url('courses/enrolled/'.$course_id.'/'.$lecture->id)}}" class="text_category_menu">{{$lecture->name}}</a></li>
				@endforeach
					<li class="list-group-item categoty_menu"><a href="{{url('courses/enrolled/'.$course_id.'/13')}}" class="text_category_menu">Quiz</a></li>
				</ul>
			</div>
			
			<div class="col-md-8 col-md-offset-1" >
			
<div class="text-center">
</div>
<div>
<h1>Chapter 1--The Study of Life </h1>
1. True or False. It is easy to define the term life. (pp. 1,3,5-7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="1" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="1" VALUE=2> False<br>
</DIR>

 2. Which of the following is NOT a characteristic of life? (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="2" VALUE=1> 1. Living things are adapted.<br>
<INPUT TYPE="radio" NAME="2" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="2" VALUE=3> 3. Living things are unorganized.<br>
<INPUT TYPE="radio" NAME="2" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="2" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 3. Which of the following is NOT a characteristic of life? (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="3" VALUE=1> 1. Living things are adapted to a particular way of life.<br>
<INPUT TYPE="radio" NAME="3" VALUE=2> 2. Living things respond to stimuli.<br>
<INPUT TYPE="radio" NAME="3" VALUE=3> 3. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="3" VALUE=4> 4. Living things have an internal environment that stays absolutely constant.<br>
<INPUT TYPE="radio" NAME="3" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 4. The body temperature of humans fluctuates only slightly during the day. This is an example of which characteristic of life? (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="4" VALUE=1> 1. Living things are adapted.<br>
<INPUT TYPE="radio" NAME="4" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="4" VALUE=3> 3. Living things are organized.<br>
<INPUT TYPE="radio" NAME="4" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="4" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 5. Living things cannot maintain their organization or carry on life's activities ______. (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="5" VALUE=1> 1. without an outside source of material.<br>
<INPUT TYPE="radio" NAME="5" VALUE=2> 2. without an outside source of energy.<br>
<INPUT TYPE="radio" NAME="5" VALUE=3> 3. without an outside source of materials and energy.<br>
<INPUT TYPE="radio" NAME="5" VALUE=4> 4. without an internal source of materials and energy.<br>
</DIR>

 6. A(n) ______ is the lowest level of biological organization to have the characteristics of life. (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="6" VALUE=1> 1. organ<br>
<INPUT TYPE="radio" NAME="6" VALUE=2> 2. cell<br>
<INPUT TYPE="radio" NAME="6" VALUE=3> 3. tissue<br>
<INPUT TYPE="radio" NAME="6" VALUE=4> 4. organ system<br>
<INPUT TYPE="radio" NAME="6" VALUE=5> 5. organism<br>
</DIR>

 7. The stomach in our body represents which level of biological organization? (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="7" VALUE=1> 1. tissues<br>
<INPUT TYPE="radio" NAME="7" VALUE=2> 2. organ systems<br>
<INPUT TYPE="radio" NAME="7" VALUE=3> 3. cells<br>
<INPUT TYPE="radio" NAME="7" VALUE=4> 4. organs<br>
<INPUT TYPE="radio" NAME="7" VALUE=5> 5. molecules<br>
</DIR>

 8. Organs, such as the heart, are composed of ______ which is the next lower level of biological organization. (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="8" VALUE=1> 1. tissues<br>
<INPUT TYPE="radio" NAME="8" VALUE=2> 2. organ systems<br>
<INPUT TYPE="radio" NAME="8" VALUE=3> 3. cells<br>
<INPUT TYPE="radio" NAME="8" VALUE=4> 4. atoms<br>
<INPUT TYPE="radio" NAME="8" VALUE=5> 5. molecules<br>
</DIR>

 9. The next higher level of biological organization above the cell is the ______. (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="9" VALUE=1> 1. organ<br>
<INPUT TYPE="radio" NAME="9" VALUE=2> 2. organ systems<br>
<INPUT TYPE="radio" NAME="9" VALUE=3> 3. tissues<br>
<INPUT TYPE="radio" NAME="9" VALUE=4> 4. atoms<br>
<INPUT TYPE="radio" NAME="9" VALUE=5> 5. molecules<br>
</DIR>

 10. The highest level of biological organization listed here is the ______. (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="10" VALUE=1> 1. atom<br>
<INPUT TYPE="radio" NAME="10" VALUE=2> 2. cell<br>
<INPUT TYPE="radio" NAME="10" VALUE=3> 3. tissues<br>
<INPUT TYPE="radio" NAME="10" VALUE=4> 4. organ<br>
<INPUT TYPE="radio" NAME="10" VALUE=5> 5. organism<br>
</DIR>

 11. Which sequence correctly increases complexity in the level of biological organization? (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="11" VALUE=1> 1. atoms, molecules, cells, organs, tissues<br>
<INPUT TYPE="radio" NAME="11" VALUE=2> 2. molecules, atoms, cells, organs, tissues<br>
<INPUT TYPE="radio" NAME="11" VALUE=3> 3. atoms, molecules, tissues, organs, cells<br>
<INPUT TYPE="radio" NAME="11" VALUE=4> 4. atoms, molecules, cells, tissues, organs<br>
<INPUT TYPE="radio" NAME="11" VALUE=5> 5. atoms, molecules, organs, tissues, cells<br>
</DIR>

 12. True or False. Atoms are made up of molecules. (p. 5) </H2>
<DIR>
<INPUT TYPE="radio" NAME="12" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="12" VALUE=2> False<br>
</DIR>

 13. The ability of living things to produce offspring that resemble themselves is called ______. (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="13" VALUE=1> 1. homeostasis<br>
<INPUT TYPE="radio" NAME="13" VALUE=2> 2. adaptation<br>
<INPUT TYPE="radio" NAME="13" VALUE=3> 3. reproduction<br>
<INPUT TYPE="radio" NAME="13" VALUE=4> 4. evolution<br>
<INPUT TYPE="radio" NAME="13" VALUE=5> 5. taxonomy<br>
</DIR>

 14. All the chemical reactions that occur in a cell is called ______. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="14" VALUE=1> 1. homeostasis<br>
<INPUT TYPE="radio" NAME="14" VALUE=2> 2. adaptation<br>
<INPUT TYPE="radio" NAME="14" VALUE=3> 3. reproduction<br>
<INPUT TYPE="radio" NAME="14" VALUE=4> 4. metabolism<br>
<INPUT TYPE="radio" NAME="14" VALUE=5> 5. taxonomy<br>
</DIR>

 15. Plants can capture solar energy and carry on ______, a process that allows them to make their own food. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="15" VALUE=1> 1. photosynthesis<br>
<INPUT TYPE="radio" NAME="15" VALUE=2> 2. adaptation<br>
<INPUT TYPE="radio" NAME="15" VALUE=3> 3. homeostasis<br>
<INPUT TYPE="radio" NAME="15" VALUE=4> 4. evolution<br>
<INPUT TYPE="radio" NAME="15" VALUE=5> 5. metabolism<br>
</DIR>

 16. Food provides nutrient molecules, which are used either as building blocks or for ______. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="16" VALUE=1> 1. photosynthesis<br>
<INPUT TYPE="radio" NAME="16" VALUE=2> 2. energy<br>
<INPUT TYPE="radio" NAME="16" VALUE=3> 3. reproduction<br>
<INPUT TYPE="radio" NAME="16" VALUE=4> 4. homeostasis<br>
<INPUT TYPE="radio" NAME="16" VALUE=5> 5. metabolism<br>
</DIR>

 17. All systems of the body contribute to homeostasis. The ______ system provides nutrient molecules. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="17" VALUE=1> 1. circulatory<br>
<INPUT TYPE="radio" NAME="17" VALUE=2> 2. excretory<br>
<INPUT TYPE="radio" NAME="17" VALUE=3> 3. nervous<br>
<INPUT TYPE="radio" NAME="17" VALUE=4> 4. hormonal<br>
<INPUT TYPE="radio" NAME="17" VALUE=5> 5. digestive<br>
</DIR>

 18. All systems of the body contribute to homeostasis. The ______ system transports the nutrient molecules about the body. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="18" VALUE=1> 1. circulatory<br>
<INPUT TYPE="radio" NAME="18" VALUE=2> 2. excretory<br>
<INPUT TYPE="radio" NAME="18" VALUE=3> 3. nervous<br>
<INPUT TYPE="radio" NAME="18" VALUE=4> 4. hormonal<br>
<INPUT TYPE="radio" NAME="18" VALUE=5> 5. digestive<br>
</DIR>

 19. All systems of the body contribute to homeostasis. The ______ system rids the blood of metabolic wastes. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="19" VALUE=1> 1. circulatory<br>
<INPUT TYPE="radio" NAME="19" VALUE=2> 2. excretory<br>
<INPUT TYPE="radio" NAME="19" VALUE=3> 3. nervous<br>
<INPUT TYPE="radio" NAME="19" VALUE=4> 4. hormonal<br>
<INPUT TYPE="radio" NAME="19" VALUE=5> 5. digestive<br>
</DIR>

 20. All systems of the body contribute to homeostasis. The ______ systems coordinate the activities of the other systems. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="20" VALUE=1> 1. circulatory<br>
<INPUT TYPE="radio" NAME="20" VALUE=2> 2. excretory<br>
<INPUT TYPE="radio" NAME="20" VALUE=3> 3. respiratory<br>
<INPUT TYPE="radio" NAME="20" VALUE=4> 4. nervous and hormonal<br>
<INPUT TYPE="radio" NAME="20" VALUE=5> 5. digestive<br>
</DIR>

 21. Living things respond to external stimuli. Which of the following is NOT a response to a stimulus? (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="21" VALUE=1> 1. Leaves of plants track the movements of the sun during the day.<br>
<INPUT TYPE="radio" NAME="21" VALUE=2> 2. A houseplant, when placed near a window, bends its stem to face the sun.<br>
<INPUT TYPE="radio" NAME="21" VALUE=3> 3. The pupils of the human eye dilate in a dark environment.<br>
<INPUT TYPE="radio" NAME="21" VALUE=4> 4. Touching a hot stove causes the hand to quickly move away.<br>
<INPUT TYPE="radio" NAME="21" VALUE=5> 5. Organs are composed of tissues, and each tissue contains groups of similar cells.<br>
</DIR>

 22. True or False. Food that humans eat is used in our body cells only for energy. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="22" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="22" VALUE=2> False<br>
</DIR>

 23. True or False. The human population tends to modify existing ecosystems for the best interests of the original populations. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="23" VALUE=1> 1. True<br>
<INPUT TYPE="radio" NAME="23" VALUE=2> 2. False<br>
</DIR>

 24. The circulatory system is composed of the heart and the blood vessels, which in turn are composed of cells. This is an example of which characteristic of life? (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="24" VALUE=1> 1. Living things are organized.<br>
<INPUT TYPE="radio" NAME="24" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="24" VALUE=3> 3. Living things are adapted to a particular way of life.<br>
<INPUT TYPE="radio" NAME="24" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="24" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 25. ______ is the capacity to do work. (p. 6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="25" VALUE=1> 1. Metabolism<br>
<INPUT TYPE="radio" NAME="25" VALUE=2> 2. Homeostasis<br>
<INPUT TYPE="radio" NAME="25" VALUE=3> 3. Reproduction<br>
<INPUT TYPE="radio" NAME="25" VALUE=4> 4. Adaptation<br>
<INPUT TYPE="radio" NAME="25" VALUE=5> 5. Energy<br>
</DIR>

 26. A bird like an osprey can catch a fish. The osprey has massive flight muscles, a white breast and belly to camouflage its presence, and strong feet and claws to hold onto the slippery fish. This is an example of which characteristic of life? (pp. 5-6) </H2>
<DIR>
<INPUT TYPE="radio" NAME="26" VALUE=1> 1. Living things respond to stimuli.<br>
<INPUT TYPE="radio" NAME="26" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="26" VALUE=3> 3. Living things are organized.<br>
<INPUT TYPE="radio" NAME="26" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="26" VALUE=5> 5. Living things are adapted to a particular way of life.<br>
</DIR>

 27. Which of the following statements is NOT correct about evolution? (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="27" VALUE=1> 1. New variations within certain members of a species allows them to capture fewer resources.<br>
<INPUT TYPE="radio" NAME="27" VALUE=2> 2. Members of a population with variations tend to survive and have more offspring.<br>
<INPUT TYPE="radio" NAME="27" VALUE=3> 3. Each successive generation will include more members with the new variation.<br>
<INPUT TYPE="radio" NAME="27" VALUE=4> 4. In the end, most members of a species have the same adaptations to their environment.<br>
<INPUT TYPE="radio" NAME="27" VALUE=5> 5. Evolution can be used to explain the unity and diversity of life.<br>
</DIR>

 28. When a sharp pin gets stuck in your finger, your arm moves quickly away. This is an example of which characteristic of life? (pp. 6-7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="28" VALUE=1> 1. Living things respond to stimuli.<br>
<INPUT TYPE="radio" NAME="28" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="28" VALUE=3> 3. Living things are organized.<br>
<INPUT TYPE="radio" NAME="28" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="28" VALUE=5> 5. Living things are adapted to a particular way of life.<br>
</DIR>

 29. True or False. Behavior is directed toward minimizing injury, acquiring food, and reproducing. (pp. 6-7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="29" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="29" VALUE=2> False<br>
</DIR>

 30. An acorn seed becomes a seedling before it is an oak tree. This is an example of which characteristic of life? (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="30" VALUE=1> 1. Living things are adapted to a particular way of life.<br>
<INPUT TYPE="radio" NAME="30" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="30" VALUE=3> 3. Living things are organized.<br>
<INPUT TYPE="radio" NAME="30" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="30" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 31. True or False. Some organisms do NOT undergo development. (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="31" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="31" VALUE=2> False<br>
</DIR>

 32. A housefly has offspring that soon replace the parents. This is an example of which characteristic of life? (pp. 6-7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="32" VALUE=1> 1. Living things are adapted to a particular way of life.<br>
<INPUT TYPE="radio" NAME="32" VALUE=2> 2. Living things are homeostatic.<br>
<INPUT TYPE="radio" NAME="32" VALUE=3> 3. Living things are organized.<br>
<INPUT TYPE="radio" NAME="32" VALUE=4> 4. Living things reproduce.<br>
<INPUT TYPE="radio" NAME="32" VALUE=5> 5. Living things grow and develop.<br>
</DIR>

 33. Modifications that make an organism better suited to its way of life are called ______. (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="33" VALUE=1> 1. reproduction<br>
<INPUT TYPE="radio" NAME="33" VALUE=2> 2. homeostasis<br>
<INPUT TYPE="radio" NAME="33" VALUE=3> 3. adaptations<br>
<INPUT TYPE="radio" NAME="33" VALUE=4> 4. metabolic reactions<br>
<INPUT TYPE="radio" NAME="33" VALUE=5> 5. taxonomy<br>
</DIR>

 34. ______ is the process by which characteristics of species change through time. (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="34" VALUE=1> 1. Adaptation<br>
<INPUT TYPE="radio" NAME="34" VALUE=2> 2. Evolution<br>
<INPUT TYPE="radio" NAME="34" VALUE=3> 3. Metabolism<br>
<INPUT TYPE="radio" NAME="34" VALUE=4> 4. Reproduction<br>
<INPUT TYPE="radio" NAME="34" VALUE=5> 5. Taxonomy<br>
</DIR>

 35. True or False. Evolution can explain the <i>unity</i> of life but NOT the <i>diversity</i> of life. (p. 7) </H2>
<DIR>
<INPUT TYPE="radio" NAME="35" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="35" VALUE=2> False<br>
</DIR>

 36. The ______ is any place on the surface of the earth, whether in the atmosphere or down into the seas, where organisms exist. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="36" VALUE=1> 1. experimental variable<br>
<INPUT TYPE="radio" NAME="36" VALUE=2> 2. ecosystem<br>
<INPUT TYPE="radio" NAME="36" VALUE=3> 3. biosphere<br>
<INPUT TYPE="radio" NAME="36" VALUE=4> 4. biodiversity<br>
<INPUT TYPE="radio" NAME="36" VALUE=5> 5. taxonomy<br>
</DIR>

 37. The ______ represents all of the populations of organisms in one natural setting plus their physical environment. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="37" VALUE=1> 1. experimental variable<br>
<INPUT TYPE="radio" NAME="37" VALUE=2> 2. ecosystem<br>
<INPUT TYPE="radio" NAME="37" VALUE=3> 3. biosphere<br>
<INPUT TYPE="radio" NAME="37" VALUE=4> 4. biodiversity<br>
<INPUT TYPE="radio" NAME="37" VALUE=5> 5. taxonomy<br>
</DIR>

 38. As more tropical rain forests are destroyed, an increase in ______ levels in the atmosphere is expected. (pp. 9-10) </H2>
<DIR>
<INPUT TYPE="radio" NAME="38" VALUE=1> 1. carbon dioxide<br>
<INPUT TYPE="radio" NAME="38" VALUE=2> 2. oxygen<br>
<INPUT TYPE="radio" NAME="38" VALUE=3> 3. nitrogen<br>
<INPUT TYPE="radio" NAME="38" VALUE=4> 4. ozone<br>
<INPUT TYPE="radio" NAME="38" VALUE=5> 5. hydrogen<br>
</DIR>

 39. Which of the following statements is false? (pp. 9-10) </H2>
<DIR>
<INPUT TYPE="radio" NAME="39" VALUE=1> 1. More ecosystems undergo modifications as the human population increases in size. <br>
<INPUT TYPE="radio" NAME="39" VALUE=2> 2. Tropical rain forests act like a sponge to absorb carbon dioxide.<br>
<INPUT TYPE="radio" NAME="39" VALUE=3> 3. The biosphere needs to be preserved for our own benefit.<br>
<INPUT TYPE="radio" NAME="39" VALUE=4> 4. As ecosystems are destroyed, the number of species living there will increase. <br>
<INPUT TYPE="radio" NAME="39" VALUE=5> 5. Genetic engineering can improve species that presently exist.<br>
</DIR>

 40. The ______ is in a dynamic balance because of the interactions of its populations. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="40" VALUE=1> 1. ecosystem<br>
<INPUT TYPE="radio" NAME="40" VALUE=2> 2. biosphere<br>
<INPUT TYPE="radio" NAME="40" VALUE=3> 3. biodiversity-reduction crisis<br>
<INPUT TYPE="radio" NAME="40" VALUE=4> 4. Cell Theory<br>
<INPUT TYPE="radio" NAME="40" VALUE=5> 5. Biogenesis Theory<br>
</DIR>

 41. All the members of one species belong to a(an) ______. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="41" VALUE=1> 1. biosphere<br>
<INPUT TYPE="radio" NAME="41" VALUE=2> 2. ecosystem<br>
<INPUT TYPE="radio" NAME="41" VALUE=3> 3. population<br>
<INPUT TYPE="radio" NAME="41" VALUE=4> 4. phylum<br>
<INPUT TYPE="radio" NAME="41" VALUE=5> 5. kingdom<br>
</DIR>

 42. True or False. Humans are totally dependent on other species for food, clothing, medicine, and various raw materials. (p. 9) </H2>
<DIR>
<INPUT TYPE="radio" NAME="42" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="42" VALUE=2> False<br>
</DIR>

 43. A(an) ______ is a biologist dedicated to naming, describing, and classifying organisms. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="43" VALUE=1> 1. taxonomist<br>
<INPUT TYPE="radio" NAME="43" VALUE=2> 2. ecologist<br>
<INPUT TYPE="radio" NAME="43" VALUE=3> 3. anatomist<br>
<INPUT TYPE="radio" NAME="43" VALUE=4> 4. physiologist<br>
<INPUT TYPE="radio" NAME="43" VALUE=5> 5. taxidermist<br>
</DIR>

 44. True or False. The scientific name for humans is <i>Homo sapiens</i>. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="44" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="44" VALUE=2> False<br>
</DIR>

 45. True or False. The first word in the scientific name of an organism is the species name and the second word is the genus name. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="45" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="45" VALUE=2> False<br>
</DIR>

 46. True or False. Species within the same genus share very similar characteristics. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="46" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="46" VALUE=2> False<br>
</DIR>

 47. True or False. Species are classified according to their presumed evolutionary relationship. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="47" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="47" VALUE=2> False<br>
</DIR>

 48. True or False. The scientific name for corn is <i>Zea mays</i>. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="48" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="48" VALUE=2> False<br>
</DIR>

 49. What is the correct scientific name for humans? (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="49" VALUE=1> 1. <i>sapiens homo</i><br>
<INPUT TYPE="radio" NAME="49" VALUE=2> 2. <i>sapiens Homo</i><br>
<INPUT TYPE="radio" NAME="49" VALUE=3> 3. <i>homo sapiens</i><br>
<INPUT TYPE="radio" NAME="49" VALUE=4> 4. <i>Homo sapiens</i><br>
</DIR>

 50. Humans belong to the kingdom ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="50" VALUE=1> 1. Monera<br>
<INPUT TYPE="radio" NAME="50" VALUE=2> 2. Animalia<br>
<INPUT TYPE="radio" NAME="50" VALUE=3> 3. Plantae<br>
<INPUT TYPE="radio" NAME="50" VALUE=4> 4. Protista<br>
<INPUT TYPE="radio" NAME="50" VALUE=5> 5. Hominidae<br>
</DIR>

 51. According to the binomial classification system, humans belong in the phylum ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="51" VALUE=1> 1. Mammalia<br>
<INPUT TYPE="radio" NAME="51" VALUE=2> 2. Homo<br>
<INPUT TYPE="radio" NAME="51" VALUE=3> 3. Hominidae<br>
<INPUT TYPE="radio" NAME="51" VALUE=4> 4. Primates<br>
<INPUT TYPE="radio" NAME="51" VALUE=5> 5. Chordata<br>
</DIR>

 52. According to the binomial classification system, humans belong in the class ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="52" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="52" VALUE=2> 2. Chordata<br>
<INPUT TYPE="radio" NAME="52" VALUE=3> 3. Mammalia<br>
<INPUT TYPE="radio" NAME="52" VALUE=4> 4. Primates<br>
<INPUT TYPE="radio" NAME="52" VALUE=5> 5. Hominidae<br>
</DIR>

 53. According to the binomial classification system, humans belong in the family ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="53" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="53" VALUE=2> 2. Chordata<br>
<INPUT TYPE="radio" NAME="53" VALUE=3> 3. Mammalia<br>
<INPUT TYPE="radio" NAME="53" VALUE=4> 4. Primates<br>
<INPUT TYPE="radio" NAME="53" VALUE=5> 5. Hominidae<br>
</DIR>

 54. Bacteria and cyanobacteria belong to the kingdom ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="54" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="54" VALUE=2> 2. Plantae<br>
<INPUT TYPE="radio" NAME="54" VALUE=3> 3. Monera<br>
<INPUT TYPE="radio" NAME="54" VALUE=4> 4. Protista<br>
<INPUT TYPE="radio" NAME="54" VALUE=5> 5. Fungi<br>
</DIR>

 55. Protozoans, algae, and water molds belong to the kingdom ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="55" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="55" VALUE=2> 2. Plantae<br>
<INPUT TYPE="radio" NAME="55" VALUE=3> 3. Monera<br>
<INPUT TYPE="radio" NAME="55" VALUE=4> 4. Protista<br>
<INPUT TYPE="radio" NAME="55" VALUE=5> 5. Fungi<br>
</DIR>

 56. Molds and mushrooms belong to the kingdom ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="56" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="56" VALUE=2> 2. Plantae<br>
<INPUT TYPE="radio" NAME="56" VALUE=3> 3. Monera<br>
<INPUT TYPE="radio" NAME="56" VALUE=4> 4. Protista<br>
<INPUT TYPE="radio" NAME="56" VALUE=5> 5. Fungi<br>
</DIR>

 57. Mosses and ferns belong to the kingdom ______. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="57" VALUE=1> 1. Animalia<br>
<INPUT TYPE="radio" NAME="57" VALUE=2> 2. Plantae<br>
<INPUT TYPE="radio" NAME="57" VALUE=3> 3. Monera<br>
<INPUT TYPE="radio" NAME="57" VALUE=4> 4. Protista<br>
<INPUT TYPE="radio" NAME="57" VALUE=5> 5. Fungi<br>
</DIR>

 58. Many taxonomists today recognize ______ kingdoms. (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="58" VALUE=1> 1. one<br>
<INPUT TYPE="radio" NAME="58" VALUE=2> 2. two<br>
<INPUT TYPE="radio" NAME="58" VALUE=3> 3. three<br>
<INPUT TYPE="radio" NAME="58" VALUE=4> 4. four<br>
<INPUT TYPE="radio" NAME="58" VALUE=5> 5. five<br>
</DIR>

 59. Which of the following taxonomic sequences is correct starting from the most specific but including the fewest in number? (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="59" VALUE=1> 1. species, family, order, class, genus<br>
<INPUT TYPE="radio" NAME="59" VALUE=2> 2. genus, species, family, order, class<br>
<INPUT TYPE="radio" NAME="59" VALUE=3> 3. family, species, genus, class, order<br>
<INPUT TYPE="radio" NAME="59" VALUE=4> 4. class, order, family, genus, species<br>
<INPUT TYPE="radio" NAME="59" VALUE=5> 5. species, genus, family, order, class<br>
</DIR>

 60. Which of the following statements is false? (p. 11) </H2>
<DIR>
<INPUT TYPE="radio" NAME="60" VALUE=1> 1. Organisms placed in the same genus are least closely related.<br>
<INPUT TYPE="radio" NAME="60" VALUE=2> 2. The scientific name for humans is <i>Homo sapiens</i>.<br>
<INPUT TYPE="radio" NAME="60" VALUE=3> 3. Moving from species to kingdom, more different types of species are included in each higher category.<br>
<INPUT TYPE="radio" NAME="60" VALUE=4> 4. Species that are in the same genus share very specific characteristics.<br>
<INPUT TYPE="radio" NAME="60" VALUE=5> 5. Taxonomists are biologists who classify organisms.<br>
</DIR>

 61. Which theory states that organisms contain coded information that dictates their form, function, and behavior? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="61" VALUE=1> 1. Cell Theory<br>
<INPUT TYPE="radio" NAME="61" VALUE=2> 2. Gene Theory<br>
<INPUT TYPE="radio" NAME="61" VALUE=3> 3. Biogenesis Theory<br>
<INPUT TYPE="radio" NAME="61" VALUE=4> 4. Evolution Theory<br>
</DIR>

 62. Which theory states that all organisms are composed of cells? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="62" VALUE=1> 1. Cell Theory<br>
<INPUT TYPE="radio" NAME="62" VALUE=2> 2. Gene Theory<br>
<INPUT TYPE="radio" NAME="62" VALUE=3> 3. Biogenesis Theory<br>
<INPUT TYPE="radio" NAME="62" VALUE=4> 4. Evolution Theory<br>
</DIR>

 63. Which theory states that all living things have a common ancestor and are adapted to a particular way of life? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="63" VALUE=1> 1. Cell Theory<br>
<INPUT TYPE="radio" NAME="63" VALUE=2> 2. Gene Theory<br>
<INPUT TYPE="radio" NAME="63" VALUE=3> 3. Biogenesis Theory<br>
<INPUT TYPE="radio" NAME="63" VALUE=4> 4. Evolution Theory<br>
</DIR>

 64. Which theory states that life comes only from life? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="64" VALUE=1> 1. Cell Theory<br>
<INPUT TYPE="radio" NAME="64" VALUE=2> 2. Gene Theory<br>
<INPUT TYPE="radio" NAME="64" VALUE=3> 3. Biogenesis Theory<br>
<INPUT TYPE="radio" NAME="64" VALUE=4> 4. Evolution Theory<br>
</DIR>

 65. A hypothesis is ______. (pp. 12-13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="65" VALUE=1> 1. a conceptual scheme supported by many experiments<br>
<INPUT TYPE="radio" NAME="65" VALUE=2> 2. a result of deductive reasoning<br>
<INPUT TYPE="radio" NAME="65" VALUE=3> 3. a tentative explanation of the results<br>
<INPUT TYPE="radio" NAME="65" VALUE=4> 4. a tentative explanation of observed phenomena<br>
</DIR>

 66. A ______ is a conceptual scheme that is supported by a large number of observations and not found lacking. (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="66" VALUE=1> 1. hypothesis<br>
<INPUT TYPE="radio" NAME="66" VALUE=2> 2. law<br>
<INPUT TYPE="radio" NAME="66" VALUE=3> 3. result<br>
<INPUT TYPE="radio" NAME="66" VALUE=4> 4. theory<br>
<INPUT TYPE="radio" NAME="66" VALUE=5> 5. principle<br>
</DIR>

 67. Which of the following sequences is correct? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="67" VALUE=1> 1. hypothesis, experiment, theory, law<br>
<INPUT TYPE="radio" NAME="67" VALUE=2> 2. law, theory, experiment, hypothesis<br>
<INPUT TYPE="radio" NAME="67" VALUE=3> 3. experiment, hypothesis, theory, law<br>
<INPUT TYPE="radio" NAME="67" VALUE=4> 4. theory, hypothesis, experiment, law<br>
<INPUT TYPE="radio" NAME="67" VALUE=5> 5. hypothesis, experiment, law, theory<br>
</DIR>

 68. Which statement is false about science? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="68" VALUE=1> 1. Science helps us to understand the natural world.<br>
<INPUT TYPE="radio" NAME="68" VALUE=2> 2. Science is objective rather than subjective.<br>
<INPUT TYPE="radio" NAME="68" VALUE=3> 3. Science has to be repeatable.<br>
<INPUT TYPE="radio" NAME="68" VALUE=4> 4. Science should be published in a journal.<br>
<INPUT TYPE="radio" NAME="68" VALUE=5> 5. The conclusion of an experiment can never change.<br>
</DIR>

 69. The approach that scientists employ to gather information is known as the ______. (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="69" VALUE=1> 1. random-choice method<br>
<INPUT TYPE="radio" NAME="69" VALUE=2> 2. scientific method<br>
<INPUT TYPE="radio" NAME="69" VALUE=3> 3. Darwin method<br>
<INPUT TYPE="radio" NAME="69" VALUE=4> 4. hit-or-miss method<br>
<INPUT TYPE="radio" NAME="69" VALUE=5> 5. Murphy's Law<br>
</DIR>

 70. Once the hypothesis has been stated, ______ reasoning comes into play. (p. 13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="70" VALUE=1> 1. inductive<br>
<INPUT TYPE="radio" NAME="70" VALUE=2> 2. deductive<br>
<INPUT TYPE="radio" NAME="70" VALUE=3> 3. theoretical<br>
<INPUT TYPE="radio" NAME="70" VALUE=4> 4. abstract<br>
</DIR>

 71. True or False. Hypotheses can never be proven true. (pp. 12-13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="71" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="71" VALUE=2> False<br>
</DIR>

 72. True or False. Deductive reasoning allows you to generalize after observing specific facts. (p. 13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="72" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="72" VALUE=2> False<br>
</DIR>

 73. True or False. A control sample goes through all the steps of the experiment except the one being tested. (p. 14) </H2>
<DIR>
<INPUT TYPE="radio" NAME="73" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="73" VALUE=2> False<br>
</DIR>

 74. True or False. The experimental variable in a controlled experiment is the result or change that is observed. (p. 14) </H2>
<DIR>
<INPUT TYPE="radio" NAME="74" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="74" VALUE=2> False<br>
</DIR>

 75. True or False. Scientists, after conducting an experiment, will usually report their findings in a newspaper article. (pp. 13, 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="75" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="75" VALUE=2> False<br>
</DIR>

 76. True or False. Scientists usually report their mathematical data obtained from experiments in a table or graph. (p. 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="76" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="76" VALUE=2> False<br>
</DIR>

 77. True or False. Statistical tests from an experiment are run to determine if there is a significant difference between the experimental variable and the dependent variable. (pp. 14-15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="77" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="77" VALUE=2> False<br>
</DIR>

 78. What is usually the <b>last</b> step in the scientific method? (pp. 13, 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="78" VALUE=1> 1. accumulate scientific data<br>
<INPUT TYPE="radio" NAME="78" VALUE=2> 2. formulate a hypothesis<br>
<INPUT TYPE="radio" NAME="78" VALUE=3> 3. conduct an experiment with a control group<br>
<INPUT TYPE="radio" NAME="78" VALUE=4> 4. draw a conclusion on the basis of the experiment<br>
<INPUT TYPE="radio" NAME="78" VALUE=5> 5. formulate a theory on the basis of the experiment<br>
</DIR>

 79. Which of the following has the greatest amount of evidence for being "true"? (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="79" VALUE=1> 1. hypotheses<br>
<INPUT TYPE="radio" NAME="79" VALUE=2> 2. conclusion<br>
<INPUT TYPE="radio" NAME="79" VALUE=3> 3. theory<br>
<INPUT TYPE="radio" NAME="79" VALUE=4> 4. law<br>
</DIR>

 80. True or False. Inductive reasoning allows a scientist to generalize after observing specific facts and begins with an "if ... then" statement. (p. 13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="80" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="80" VALUE=2> False<br>
</DIR>

 81. True or False. Lyme disease is caused by a virus. (p. 13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="81" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="81" VALUE=2> False<br>
</DIR>

 82. Which of the following statements is NOT true about science? (p. 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="82" VALUE=1> 1. The results of a scientific experiment must be repeatable.<br>
<INPUT TYPE="radio" NAME="82" VALUE=2> 2. The hypothesis of a scientific experiment must be falsifiable.<br>
<INPUT TYPE="radio" NAME="82" VALUE=3> 3. The methods and results of a scientific experiment must be published in a scientific journal. <br>
<INPUT TYPE="radio" NAME="82" VALUE=4> 4. The design of a scientific experiment should include a control sample.<br>
<INPUT TYPE="radio" NAME="82" VALUE=5> 5. The results of an experiment do not need to be statistically analyzed.<br>
</DIR>

 83. True or False. In the design of a controlled experiment to test if a sweetener is a safe food additive, genetically different mice are nonrandomly divided into the control group and the test groups. (p. 14) </H2>
<DIR>
<INPUT TYPE="radio" NAME="83" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="83" VALUE=2> False<br>
</DIR>

 84. A theory that is accepted by many scientists sometimes is called a ______. (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="84" VALUE=1> 1. hypothesis<br>
<INPUT TYPE="radio" NAME="84" VALUE=2> 2. law<br>
<INPUT TYPE="radio" NAME="84" VALUE=3> 3. result<br>
<INPUT TYPE="radio" NAME="84" VALUE=4> 4. data<br>
</DIR>

 85. The ______ theory enables scientists to understand the history of life, the variety of living things, and the development of organisms. (p. 12) </H2>
<DIR>
<INPUT TYPE="radio" NAME="85" VALUE=1> 1. cell<br>
<INPUT TYPE="radio" NAME="85" VALUE=2> 2. gene<br>
<INPUT TYPE="radio" NAME="85" VALUE=3> 3. evolution<br>
<INPUT TYPE="radio" NAME="85" VALUE=4> 4. biogenesis<br>
</DIR>

 86. True or False. There are no advantages of reporting a scientific experiment in a scientific journal other than that it allows other researchers to repeat the experiment by knowing how the experiment was conducted. (p. 13) </H2>
<DIR>
<INPUT TYPE="radio" NAME="86" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="86" VALUE=2> False<br>
</DIR>

 87. In which way has science NOT improved our lives? (p. 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="87" VALUE=1> 1. discovery of antibiotics<br>
<INPUT TYPE="radio" NAME="87" VALUE=2> 2. increased ethical and moral values<br>
<INPUT TYPE="radio" NAME="87" VALUE=3> 3. production of new strains of agricultural plants<br>
<INPUT TYPE="radio" NAME="87" VALUE=4> 4. development of polio vaccines<br>
<INPUT TYPE="radio" NAME="87" VALUE=5> 5. understanding the mechanisms that cause cancer<br>
</DIR>

 88. The scientific method tests hypotheses about the natural world, and ethical and moral decisions are NOT testable. (p. 15) </H2>
<DIR>
<INPUT TYPE="radio" NAME="88" VALUE=1> True<br>
<INPUT TYPE="radio" NAME="88" VALUE=2> False<br>
</DIR>
</div>
			</div>
			
	</div>
</div>

@endsection