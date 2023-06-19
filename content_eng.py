#!python

print("Content-Type: text/html")
print()
import cgi, sys, io

sys.stdout=io.TextIOWrapper(sys.stdout.detach(), encoding='utf-8')
sys.stderr=io.TextIOWrapper(sys.stderr.detach(), encoding='utf-8')

print('''<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Soli Deo Gloria !</title>
</head>

<body bgcolor="">

             <figure>
                <a title="John Rogers Herbert/Public domain" href="https://commons.wikimedia.org/wiki/File:Assertion_of_Liberty_of_Conscience_by_the_Independents_of_the_Westminster_Assembly_of_Divines,_1644.jpg" target="_blank">
                  <img hspace=5 vspace=5 width=400 height=200 align="left" alt="Assertion of Liberty of Conscience by the Independents of the Westminster Assembly of Divines, 1644"
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Assertion_of_Liberty_of_Conscience_by_the_Independents_of_the_Westminster_Assembly_of_Divines%2C_1644.jpg/512px-Assertion_of_Liberty_of_Conscience_by_the_Independents_of_the_Westminster_Assembly_of_Divines%2C_1644.jpg">
                </a>
                <figcaption align="justify" style="color:darkblue;">Fig. - By John Rogers Herbert(1810-1890) :<i> Assertion of Liberty of Conscience by the Independents of the Westminster Assembly of Divines.</i></figcaption>
             </figure>

             <h4 style="color:red;">From Wikipedia, the free encyclopedia.<br></h4>
             <blockquote><h5 align="justify">The Westminster Assembly of Divines was a council of divines (theologians) and members of the English Parliament appointed from 1643 to 1653 to restructure the Church of England. Several Scots also attended, and the Assembly's work was adopted by the Church of Scotland. As many as 121 ministers were called to the Assembly, with nineteen others added later to replace those who did not attend or could no longer attend. It produced a new Form of Church Government, a Confession of Faith or statement of belief, two catechisms or manuals for religious instruction (Shorter and Larger), and a liturgical manual, the Directory for Public Worship, for the Churches of England and Scotland. The Confession and catechisms were adopted as doctrinal standards in the Church of Scotland and other Presbyterian churches, where they remain normative. Amended versions of the Confession were also adopted in Congregational and Baptist churches in England and New England in the seventeenth and eighteenth centuries. The Confession became influential throughout the English-speaking world, but especially in American Protestant theology.<br>

             The Assembly was called by the Long Parliament before and during the beginning of the First English Civil War. The Long Parliament was influenced by Puritanism, a religious movement which sought to further reform the church. They were opposed to the religious policies of King Charles I and William Laud, Archbishop of Canterbury. As part of a military alliance with Scotland, Parliament agreed that the outcome of the Assembly would bring the English Church into closer conformity with the Church of Scotland. The Scottish Church was governed by a system of elected assemblies of elders called presbyterianism, rather than rule by bishops, called episcopalianism, which was used in the English church. Scottish commissioners attended and advised the Assembly as part of the agreement. Disagreements over church government caused open division in the Assembly, despite attempts to maintain unity. The party of divines who favoured presbyterianism was in the majority, but the congregationalist party, which held greater influence in the military, favoured autonomy for individual congregations rather than the subjection of congregations to regional and national assemblies entailed in presbyterianism. Parliament eventually adopted a presbyterian form of government but lacked the power to implement it. During the Restoration of the monarchy in 1660, all of the documents of the Assembly were repudiated and episcopal church government was reinstated in England.<br>

             The Assembly worked in the Reformed Protestant theological tradition, also known as Calvinism. It took the Bible as the authoritative word of God, from which all theological reflection must be based. The divines were committed to the Reformed doctrine of predestination — that God chooses certain men to be saved and enjoy eternal life rather than eternal punishment. There was some disagreement at the Assembly over the doctrine of particular redemption — that Christ died only for those chosen for salvation. The Assembly also held to Reformed covenant theology, a framework for interpreting the Bible. The Assembly's Confession is the first of the Reformed confessions to teach a doctrine called the covenant of works, which teaches that before the fall of man, God promised eternal life to Adam on condition that he perfectly obeyed God.   ----   <br>
             In the fall of man, Adam broke the covenant of works by eating of the tree of knowledge of good and evil. To remedy this, God offered salvation apart from human initiative in what was called the covenant of grace. This covenant allowed man to enjoy eternal life despite his inability to obey God's law perfectly. The idea of the covenant of grace was a much more common feature of orthodox Reformed theology. The Westminster divines set these two covenants against each other as the two major ways in which God deals with people.<br>
             The divines associated William Laud and his followers with Catholicism, which they were even more strongly opposed to. Before the civil war, the divines saw these two groups as the greatest threat to the church. With the rise of radical sectarian movements during the war, the divines became much more concerned with these groups than polemics against Catholicism. The divines were particularly concerned with those they labeled antinomians. This was a loose term for those who saw the moral law as no longer relevant for Christians. The divines saw these groups as more immediately threatening than Catholicism. ------</h5></blockquote>

</body>
</html>
''')
