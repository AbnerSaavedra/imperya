<?php

namespace Multiservices\PayPayBundle\Features\Context;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\SnippetAcceptingContext;
use Doctrine\ORM\EntityManagerInterface;
use Behat\Behat\Tester\Exception\PendingException;
use Multiservices\PayPayBundle\Entity\FormasPagos;

class FormasPagoContext implements Context, SnippetAcceptingContext
{


    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * UserContext constructor.
     * @param UserManagerInterface $userManager
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Given estas formas de pago con los siguientes detalles:
     */
    public function estosFormasDePagoConLosSiguientesDetalles(TableNode $formasdepago)
    {
        foreach ($formasdepago->getColumnsHash() as $key => $val) {

            
            $formadepago= new FormasPagos();

            $formadepago->setDescripcion($val['descripcion']);
            $formadepago->setFormaPago($val['formapago']);
            $this->em->persist($formadepago);
            $this->em->flush();
            $qb = $this->em->createQueryBuilder();

            $query = $qb->update('PayPayBundle:FormasPagos', 'f')
                ->set('f.id', $qb->expr()->literal($val['id']))
                ->where('f.formaPago =:formapago')
                //->andWhere('u.email = :email')
                ->setParameters([
                    'formapago' => $val['formapago'],
                    //'email' => $val['email']
                ])
                ->getQuery()
            ;

            $query->execute();
        }
    }
}